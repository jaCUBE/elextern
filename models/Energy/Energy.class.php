<?php

/**
 * @package       Elextern
 * @subpackage    Energy 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2014
 * 
 * @class Energy
 * @brief Basic class for all types of energy source. Contains shared data and shared methods. Children classes just overrides its method when it is necessary.
 */

class Energy {
    
  /**
   * @brief Record ID
   * @var integer $row_id
   */
  public $row_id;
  
  /**
   * @brief Name of energy source type
   * @var string $technology
   */
  public $technology;
  
  /**
   * @brief ID of country for this energy source data
   * @var string $country_code
   */
  public $country_code = 'cz';
  
  /**
   * @brief Time before the power plant operates [years]
   * @var float $construction_time
   */
  public $construction_time;
  
  /**
   * @brief Investment costs [€/kW]
   * @var float $capex
   */
  public $capex;
  
  /**
   * @brief Costs for connecting the power plant to the grid [€/kW]
   * @var float $grid_connection
   */
  public $grid_connection;
  
  /**
   * @brief Duration during which the power plant can produce electricity [years]
   * @var float $lifetime
   */
  public $lifetime;
  
  /**
   * @brief Share of CAPEX costs that are due every year for maintenance (fixed costs even without production) [% of CAPEX]
   * @var float $opex
   */
  public $opex;
  
  /**
   * @brief If the power technology can be activated "on demand" or not.
   * @var integer $dispatchable
   */
  public $dispatchable;
  
  /**
   * @brief Costs for dismantling the plant after operation [% of CAPEX]
   * @var float $eco_decomissionning
   */
  public $eco_decomissionning;
  
  /**
   * @brief Share of CAPEX that does not benefit the local economy [%]
   * @var float $eco_foreign_purchases
   */
  public $eco_foreign_purchases;
  
  /**
   * @brief Efficiency of this energy source [%]
   * @var float $eco_efficiency
   */
  public $eco_efficiency;

  /**
   * @brief If the fuel used is fossil or not
   * @var boolean $eco_fossil_fuel
   */
  public $eco_fossil_fuel;
  
  /**
   * @brief Lost working days
   * @var float $soc_sick_leave
   */  
  public $soc_sick_leave;
  
  /**
   * @brief Respiratory diseases due to air pollution from burning fuels
   * @var float $soc_respiratory
   */  
  public $soc_respiratory;
 
  /**
   * @brief Cancers due to irradiation from nuclear materials manipulation incidents
   * @var float $soc_cancer
   */
  public $soc_cancer;
  
  /**
   * @brief Average deaths per use of Technology (any cause)
   * @var float $soc_mortality
   */
  public $soc_mortality;
  
  /**
   * @brief Average CO2 emissions per MWh due to fossil fuel burning and construction works
   * @var float $lt_co2
   */
  public $lt_co2;
  
  /**
   * @brief Load factor (LF) [%]
   * @var float $load_factor
   */
  public $load_factor;
  
  /**
   * @brief Name of the data source.
   * @var string $source
   */
  public $source;
  
  
  /**
   * @brief Is this record visible?
   * @var boolean $visible
   */
  public $visible;
  
  /**
   * @brief Date and time of creating this record
   * @var string $added
   */
  public $added;
  
  /**
   * @brief Date and time of record's last change
   * @var string $timestamp
   */
  public $timestamp;

  
  
  
  
  
  
  
  
  
  
  /**
   * @brief Constructor fetches technology into this instance of (child) class.
   * @param integer $technology_id Necessary, is called from children with concrete technology ID number
   * @param integer $country_code Optional: code for country/region, default one is "cz" (Czech Republic)
   * @return void
   */
  
  
  public function __construct() {    
    if(!empty($this->technology)){ // If technology name is filled...
      $this->fetchTechnology(); // ...fetch technologies into this instance of class
    }
    
    $this->opex /= 100;
    $this->eco_decomissionning /= 100;
    $this->eco_foreign_purchases /= 100;
    $this->eco_efficiency /= 100;
    $this->load_factor /= 100;
  }
  
  
  
  
  
  /**
   * @brief Fetches technology data from database into this instance of class.
   * @return void
   */
  
  private function fetchTechnology(){
    global $_DB;

    $sql = '
      SELECT *
      FROM energy
      WHERE country_code = :country_code
        AND technology = :technology
        AND visible = 1
      LIMIT 1'; // SQL query for selecting all data for technology ID of country_code from database
    
    $STH = $_DB->prepare($sql);
    $STH->bindParam(':country_code', $this->country_code); // Binding country_code into SQL
    $STH->bindParam(':technology', $this->technology); // Binding technology_id into SQL
    $STH->setFetchMode(PDO::FETCH_INTO, $this);
    $STH->execute();
    
    $STH->fetch(); // Fetching into this instance   
  }
  
  
  
  
  
  /**
   * @brief Assuming Investment costs are linearly spent during the power plant construction time, CAPEX IDC represents CAPEX Including Discount Rate.
   * @return float CADEX IDR calculated value [€/kW]
   */
  
  public function capexIDR(){
    $result_one = $this->capex / $this->construction_time; // The first part of result
    $result_two = (pow(1 + DISCOUNT_RATE, $this->construction_time) - 1) / DISCOUNT_RATE; // Second part of result
    $result = ($result_one * $result_two) + $this->grid_connection; // The final result

    return $result; // Returning result
  }
  
  
  
  
  
  /**
   * @brief Calculates value of discounting which is part of some of next calculations.
   * @return float Calculated discounting value
   */
  
  public function discounting(){
    $result =  1 - pow(1 + DISCOUNT_RATE, -$this->lifetime); // Discounting value by formula
    
    return $result; // Returning result
  }
  
  
  
  
  
  /**
   * @brief Operation costs per produced MWh given Load Factor LF.
   * @return float CADEX actual calculated value [€/MWh]
   */
  
  public function capexActual(){
    $result_one = (1000 * ($this->capexIDR())) / (8760 * $this->load_factor); // The first part of result
    $result = $result_one * (DISCOUNT_RATE / $this->discounting()); // The final result
    
    return $result; // Returning result
  }
  
  
  
  
  
  /**
   * @brief Discounted investment costs per produced MWh over the power plant lifetime and given R and Load Factor.
   * @return float OPEX actual calculated value [€/MWh]
   */
  
  public function opexActual(){
    $result = $this->opex * $this->capex * 1000 / (8760 * $this->load_factor); // Calculation of result by formula
    
    return $result; // Returning result
  }

  
  
  
  
  /**
   * @brief LCOE = Levelised costs of Electricity.
   * @return float Calculated LCOE value [€/MWh]
   */  
  
  public function lcoe(){
    $result = $this->fuel() + $this->capexActual() + $this->opexActual(); // Calculation of LCOE by formula
    
    return $result; // Returning result
  }
  
  
  
  
  
  /**
   * @brief Interpolated for used load factor according to ELIX index (Electricity spot price for France-Germany-Austria-Switzerland market).
   * @return float Calculated value of yield flexibility [€/MWh]
   */
  
  public function yieldFlexibility(){
    global $_YIELD_CALC;

    switch ($this->dispatchable){ // Deciding which kind of interpolation should be done according dispatchability of source
      case 1: // Value 1 means year interpolation
        $time = 'year';
        break;
      
      case 2: // Value 2 means day interpolation
        $time = 'day';
        break;
      
      default: // Any other value of dispatchability means yield flexibility is 0
        return 0.0;
        break;
    }
    
    $result_one = $_YIELD_CALC->interpolationYield($this->load_factor, $time); // Interpolation of yield flexibility by load factor used of this source
    $result_two = $_YIELD_CALC->highest->highest_price_y; // Getting highest year price of highest yield record
    
    $result = $result_two - $result_one; // Difference between interpolated value and the highest possible value
    
    return $result; // Returning result
  }

  
  
  
  
  /**
   * @brief Calculating net cost of the electricity (LCOE-Flexibility Yield).
   * @return float Calculated net cost of the electricity value [€/MWh]
   */
  
  public function costNet(){    
    if(!SHOW_COST_NET){ // If net cost calculation is disabled...
      return 0.0; // ...method returns zero.
    }
    
    $result = $this->lcoe() + $this->yieldFlexibility(); // Calculating net cost according to formula
    
    return $result; // Returning result
  }

  
  
  
  
  /**
   * @brief Loss of monetary value by tech imports.
   * @return float Calculated installed capacity [MW]
   */
  
  public function techImport(){    
    $result = $this->capexActual() * $this->eco_foreign_purchases; // Calculating tech imports actual by formula
    $result *= ECO_WEIGHT_TECH_IMPORT; // Correction by tech import weight
    
    return $result;
  }
  
  

  
  
  /**
   * @brief Costs for dismantling the plant after operation.
   * @return float Calculated cost of dismantling the plant after operation [€]
   */
  
  public function decomissioningActual(){
    $discount_rate_middle = pow(1 + DISCOUNT_RATE, -$this->lifetime);
    
    $result_one = $this->eco_decomissionning * $discount_rate_middle; // Calculating actual decomissiong costs by formula
    $result_two = $this->capex / (8760 * $this->load_factor);
    $result_three = DISCOUNT_RATE / (1 - $discount_rate_middle);
    $result = $result_one * 1000 * $result_two * $result_three;
    $result *= ECO_WEIGHT_DECOMISSIONING; // Corection by actual decomissioning weight
    
    return $result; // Returning result
  }
  
  
  
  
  /**
   * @brief Calculating of all economic impacts together.
   * @return float Cost of all economic impacts [€/MWh]
   */
  
  public function impactEconomic(){
    if(!SHOW_IMPACT_ECONOMIC){ // Check if economic impact shouldn't be calculated...
      return 0.0; // ...if not, retuning 0.
    }
    
    $result = $this->decomissioningActual(); // Costs for decomissiong
    $result += $this->techImport(); // Cost of technology imports
    $result += $this->fuel() * $this->eco_fossil_fuel; // Cost of fuel (if fuel is fossil)
    
    return $result; // Returning result
  }
  
  
  
  
  
  /**
   * @brief Calculating of all social impacts together.
   * @return float Cost of all social impacts [€/MWh]
   */
  
  public function impactSocial(){
    if(!SHOW_IMPACT_SOCIAL){ // Check if social impact shouldn't be calculated...
      return 0.0; // ...if not, retuning 0.
    }
    
    $result = $this->impactSocialSickLeave(); // Costs for sick leaves multiplied by input value
    $result += $this->impactSocialRespiratoryDisease(); // Costs for respiratory diseases multiplied by input value
    $result += $this->impactSocialCancer(); // Costs for cancer multiplied by input value
    $result += $this->impactSocialMortality(); // Costs for mortality multiplied by input value
    
    return $result; // Returning result    
  }
  
  
  
  public function impactSocialSickLeave(){
    return SOC_SICK_LEAVE * $this->soc_sick_leave;
  }
  
  public function impactSocialRespiratoryDisease(){
    return SOC_RESPIRATORY * $this->soc_respiratory;
  }
  
  public function impactSocialCancer(){
    return SOC_CANCER * $this->soc_cancer;
  }
  
  public function impactSocialMortality(){
    return SOC_MORTALITY * $this->soc_mortality;
  }
  
  
  /**
   * @brief Calculating of all ENVIRONMental impacts together.
   * @return float Cost of all ENVIRONMental impacts [€/MWh]
   */
  
  public function impactEnvironment(){
    if(!SHOW_IMPACT_ENVIRONMENT){ // Check if ENVIRONMental impact shouldn't be calculated...
      return 0.0; // ...if not, retuning 0.
    }
    
    $result = $this->impactEnvironmentLandUse(); // Costs for extended land use multiplied by input value
    $result += $this->impactEnvironmentDisplacedPeople(); // Costs for compensation for displaced people multiplied by input value
    
    return $result; // Returning result    
  }
  
  
  
  
  
  public function impactEnvironmentLandUse(){
    return ENV_LAND_CONFLICT * $this->extendedLandUse();
  }
  
  
  public function impactEnvironmentDisplacedPeople(){
    return ENV_COMPENSATION * $this->displacedPeople();
  }
  
  
  
  /**
   * @brief Calculating of all longterm impacts together.
   * @return float Cost of all longterm impacts [€/MWh]
   */
  
  public function impactLongterm(){
    if(!SHOW_IMPACT_LONGTERM){ // Check if longterm impact shouldn't be calculated...
      return 0.0; // ...if not, retuning 0.
    }
    
    $result = $this->impactLongtermCO2();
    $result += $this->impactLongtermNuclearWaste();
    
    return $result; // Returning result   
  }
  
  
  
  public function impactLongtermCO2(){
    return LT_CO2_EMISSION * $this->co2Emission(); // Costs for CO2 emissions multiplied by input value
  }
  
  
  
  public function impactLongtermNuclearWaste(){
    return LT_NUCLEAR_WASTE_TREATMENT * $this->nuclearFuelPostTreatment(); // Costs for nuclear waste treatment multiplied by input value
  }
  
  
  /**
   * @brief Calculating of costs of all impacts (externalities) together.
   * @return float Cost of externalities [€/MWh]
   */
  
  public function costExternality(){
    if(!SHOW_COST_EXTERNALITY){ // Check if externalities cost shouldn't be calculated... 
      return 0.0; // ...if not, retuning 0.
    }
    
    $result = $this->impactENVIRONMent(); // Result is costs of ENVIRONMental impacts...
    $result += $this->impactEconomic(); // ...added economic impacts...
    $result += $this->impactSocial(); // ...added social impacts...
    $result += $this->impactLongterm(); // ...added longterm impacts.

    return $result; // Returning result
  }
  
  
  
  
  
  /**
   * @brief Calculating total reference cost (cost net + externalities costs)
   * @return float Total reference cost [€/MWh]
   */
  
  public function costReference(){
    $result = $this->costNet(); // Result is net cost...
    $result += $this->costExternality(); // ...plus externalities costs.
    
    return $result; // Returning result
  }
  
  
  

  
  /**
   * @brief Formats number from property or value and returns it.
   * @param string $name Name of property or method to format
   * @param boolean $method Optional: you can choose, if the first parameter is method or property (default: false)
   * @return float Formatted value of property or method
   */
  
  public function makeHtml($name, $method = false){
    if($method){ // If method parameter is true...
      $value = $this->$name(); // ...value is method
    }else{ // Method parameter is false...
      $value = $this->$name; // ...value is property
    }
    
    return number_format($value, 2, ',', '&nbsp;'); // Returning formatted number; rounded and with decimal comma instead of point
  }
  
  
  
  
  
  /**
   * @brief Default shared method of fuel computation. Will be override by children classes since every source has different formula. 
   * @return float Fuel Cost of fuel used in the power plant for producing electricity (variable cost during production only) [€/MWh]
   */
  
  public function fuel(){
    return 0.0; // Default: no fuel is needed
  }

  
  
  
  
  /**
   * @brief Extended land use for the installations and upstream activities (mining) leading to loss of biodiversity and the free services offered by nature. Will be override by children classes since every source has different formula. 
   * @return float Costs of extended land use
   */
  
  public function extendedLandUse(){
    return 0.0; // Default: no need for extended land use
  }
  

  
  
  
  /**
   * @brief Indeed climate change adaptation will be a day-to-day fight that will cost the global economy some %GDP every year and last for more than centuries. Will be override by children classes since every source has different formula.
   * @return float CO2 yearly costs in CAPEX% (vs OPEX%)
   */
  
  public function co2(){
    return 0.0; // Default: no CO2 emissions
  }
  
  
  
  /**
   * @brief In % of fuel pre-treatment per year. Indeed post treatment of nuclear wastes will require day-to-day cares similar to initial fuel processing for more than centuries. Will be override by children classes since every source has different formula.
   * @return float Nuclear fuel post-treatment
   */
  
  public function nuclearFuelPostTreatment(){
    return 0.0; // Default: no nuclear post-treatment
  }
  
  
  
  
  
  /**
   * @brief In case of not-planned evacuation (nuclear incident) compensations are due to expelled people for their new accomodation. Will be override by children classes since every source has different formula.
   * @return float Costs for unexpected displaced people
   */
  
  public function displacedPeople(){
    return 0.0; // Default: no costs for unexpected displaced people
  }
  
  
  
  
  
  /**
   * @brief Average CO2 emissions per MWh due to fossil fuel burning and construction works. Will be override by children classes since every source has different formula.
   * @return float Average CO2 emissions per MWh
   */
  
  public function co2Emission(){
    return $this->lt_co2; // Default: value of this source taken from database record
  }
  
  
  
  public function isFull(){
    if(!empty($this->row_id)){
      return true;
    }
    
    return false;
  }
  
  
  
  public function cssClass(){
    $class = Array();
    
    if($this->eco_fossil_fuel){
      $class[] = 'fossil';
    }
    
    if($this->dispatchable){
      $class[] = 'dispatchable';
    }
    
    return implode(' ', $class);
  }
  
}
