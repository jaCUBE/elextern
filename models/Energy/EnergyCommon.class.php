<?php

/**
 * @package       Elextern
 * @subpackage    Energy 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2014
 * 
 * @class EnergyCommon
 * @brief Class is basic class for all types of energy source. Contains shared data and shared methods.
 */

class EnergyCommon {
    
  /**
   * @brief Record ID
   * @var integer $row_id
   */
  public $row_id;
  
  /**
   * @brief ID of technology of energy source
   * @var integer $technology_id
   */
  public $technology_id;
  
  /**
   * @brief ID of country for this energy source data
   * @var string $country_code
   */
  public $country_code;
  
  /**
   * @brief Efficiency of this energy source [%]
   * @var float $efficiency
   */
  public $efficiency;
  
  /**
   * @brief If the power technology can be activated "on demand" or not.
   * @var boolean $dispatchability
   */
  public $dispatchability;
  
  /**
   * @brief If the fuel used is fossil or not
   * @var boolean $fossil_fuel
   */
  public $fossil_fuel;
  
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
   * @brief Duration during which the power plant can produce electricity [years]
   * @var float $lifetime
   */
  public $lifetime;
  
  /**
   * @brief Share of CAPEX that does not benefit the local economy [%]
   * @var float $foreign_purchases
   */
  public $foreign_purchases;
  
  /**
   * @brief Costs for connecting the power plant to the grid [€/kW]
   * @var float $grid_connection
   */
  public $grid_connection;
  
  /**
   * @brief Share of CAPEX costs that are due every year for maintenance (fixed costs even without production) [% of CAPEX]
   * @var float $opex
   */
  public $opex;
  
  /**
   * @brief Costs for dismantling the plant after operation [% of CAPEX]
   * @var float $decomissionning
   */
  public $decomissionning;
  
  /**
   * @brief Reference capacity [MW]
   * @var float $reference_capacity
   */
  public $reference_capacity;
  
  /**
   * @brief Learning exponent
   * @var float $learning_exponent
   */
  public $learning_exponent;
  
  /**
   * @brief Max load factor (LF) [%]
   * @var float $load_factor_max
   */
  public $load_factor_max;
  
  /**
   * @brief Used load factor (LF) [%]
   * @var float $load_factor_user
   */
  public $load_factor_used;

  /**
   * @brief Installed capacity [MW]
   * @var float $installed_capacity
   */
  public $installed_capacity;
  
  /**
   * @brief Respiratory diseases and sick leaves
   * @var float $health_respiratory
   */
  public $health_respiratory;
  
  /**
   * @brief Cancers and sick leaves
   * @var float $health_cancer
   */
  public $health_cancer;
  
  /**
   * @brief Mortality
   * @var float $health_mortality
   */
  public $health_mortality;
  
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
   * @brief Ton of oil equivalent of fuel of this energy source (different for all sources, their class overrides it)
   * @var float $toe
   */
  public $toe = 0.0;
  
  /**
   * @brief Tonnes of CO2 emitted for burning 1 TOE (different for all sources, their class overrides it)
   * @var float $co2
   */
  public $toe_co2 = 0.0;
  
  
  /**
   * @brief Thermal MWh energy of one tone of oil (constant for all sources)
   * @var float $toe
   */
  public $toe_thermal_mwh = 11.7;
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  /**
   * @brief Constructor fetches technology into this instance of (child) class.
   * @param integer $technology_id Necessary, is called from children with concrete technology ID number
   * @param integer $country_code Optional: code for country/region, default one is "cz" (Czech Republic)
   * @return void
   */
  
  
  public function __construct($technology_id, $country_code = 'cz') {
    $this->technology_id = $technology_id; // Technology ID into class property
    $this->country_code = $country_code; // Country code into class property
    
    $this->fetchTechnology(); // Fetch technologies into this instance of class
    
    $this->efficiency /= 100; // Percentage to decimal ratio
    $this->opex /= 100; // Percentage to decimal ratio
    $this->load_factor_max /= 100; // Percentage to decimal ratio
    $this->load_factor_used /= 100; // Percentage to decimal ratio
    $this->foreign_purchases /= 100; // Percentage to decimal ratio
    $this->decomissionning /= 100; // Percentage to decimal ratio
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
        AND technology_id = :technology_id
        AND visible = 1
      LIMIT 1'; // SQL query for selecting all data for technology ID of country_code from database
    
    $STH = $_DB->prepare($sql);
    $STH->bindParam(':country_code', $this->country_code); // Binding country_code into SQL
    $STH->bindParam(':technology_id', $this->technology_id); // Binding technology_id into SQL
    $STH->setFetchMode(PDO::FETCH_INTO, $this);
    $STH->execute();
    
    $STH->fetch(); // Fetching into this instance   
  }
  
  
  
  
  
  /**
   * @brief Assuming Investment costs are linearly spent during the power plant construction time, CAPEX IDC represents CAPEX Including Discount Rate.
   * @return float CADEX IDR calculated value [€/kW]
   */
  
  public function capexIDR(){
    global $_IN_COST;
    
    $result_one = $this->capex / $this->construction_time; // The first part of result
    $result_two = (pow(1 + $_IN_COST->getDiscountRate(), $this->construction_time) - 1) / $_IN_COST->getDiscountRate(); // Second part of result
    $result = ($result_one * $result_two) + $this->grid_connection; // The final result

    return $result; // Returning result
  }
  
  
  
  
  
  /**
   * @brief Operation costs per produced MWh given Load Factor LF.
   * @return float CADEX actual calculated value [€/MWh]
   */
  
  public function capexActual(){
    global $_IN_COST;
    
    $result_one = (1000 * ($this->capexIDR())) / (8760 * $this->load_factor_used); // The first part of result
    $result_two = 1 - pow(1 + $_IN_COST->getDiscountRate(), -$this->lifetime); // Second part of result
    $result = $result_one * ($_IN_COST->getDiscountRate() / $result_two); // The final result
    
    return $result; // Returning result
  }
  
  
  
  
  
  /**
   * @brief Discounted investment costs per produced MWh over the power plant lifetime and given R and Load Factor.
   * @return float OPEX actual calculated value [€/MWh]
   */
  
  public function opexActual(){
    $result = $this->opex * $this->capex * 1000 / (8760 * $this->load_factor_used); // Calculation of result by formula
    
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
    
    if(!$this->dispatchability){ // If this source IS NOT dispatchable...
      return 0.0; // ...yield flexibility is 0
    }
    
    $result_one = $_YIELD_CALC->interpolationYield($this->load_factor_used); // Interpolation of yield flexibility by load factor used of this source
    $result_two = $_YIELD_CALC->highest->highest_price_y; // Getting highest year price of highest yield record
    
    $result = $result_two - $result_one; // Difference between interpolated value and the highest possible value
    
    return $result; // Returning result
  }
  
  
  
  
  
  /**
   * @brief Calculating net cost of the electricity (LCOE-Flexibility Yield).
   * @return float Calculated net cost of the electricity value [€/MWh]
   */
  
  public function costNet(){
    global $_IN_COST;
    
    if(!$_IN_COST->show_cost_net){ // If net cost calculation is disabled...
      return 0.0; // ...method returns zero.
    }
    
    $result = $this->lcoe() + $this->yieldFlexibility(); // Calculating net cost according to formula
    
    return $result; // Returning result
  }
  
  
  
  
  /**
   * @brief Calculating CAPEX% (vs OPEX%) (?)
   * @return float Calculated CAPEX% (vs OPEX%) value [%]
   */
  
  public function capexOpex(){
    global $_IN_COST;
    
    $result_one = $_IN_COST->getDiscountRate(); // The first part of result
    $result_two = 1 - pow(1 + $_IN_COST->getDiscountRate(), -$this->lifetime); // Second part of result
    $result = $result_one / $result_two; // The final result by formula
   
    return $result; // Returning result
  }
  
  
  
  
  
  /**
   * @brief Simply multiplies load factor used with installed capacity.
   * @return float Calculated installed capacity [MW]
   */
  
  public function energyProduced(){
    $result = $this->load_factor_used * $this->installed_capacity; // Calculation of installed capacity by formula
    
    return $result; // Returning result
  }
  
  
  
  
  
  /**
   * @brief Loss of monetary value by tech imports.
   * @return float Calculated installed capacity [MW]
   */
  
  public function techImport(){
    $result = $this->capexActual() * $this->foreign_purchases;
    
    return $result;
  }
  
  
  
  
  
  public function impactSocial(){
    global $_IN_IMPACT;
    
    if(!$_IN_IMPACT->show_impact_social){
      return 0.0;
    }
    
    $result = $_IN_IMPACT->health_respiratory * $this->health_respiratory;
    $result += $_IN_IMPACT->health_cancer * $this->health_cancer;
    $result += $_IN_IMPACT->health_mortality * $this->health_mortality;
    
    return $result;    
  }
  
  
  public function climateChange(){
    global $_IN_IMPACT;
    
    $result = $_IN_IMPACT->implicitCo2Price() * $this->co2Emission();
    
    return $result;
    
  }
  
  
  public function decomissioningActual(){
    global $_IN_COST;
    
    $discount_rate_middle = pow(1 + $_IN_COST->getDiscountRate(), -$this->lifetime);
    
    $result_one = $this->decomissionning * $discount_rate_middle;
    $result_two = $this->capex / (8760 * $this->load_factor_used);
    $result_three = $_IN_COST->getDiscountRate() / (1 - $discount_rate_middle);
    $result = $result_one * 1000 * $result_two * $result_three;
    
    return $result;
  }
  
  public function impactEconomic(){
    global $_IN_IMPACT;
    
    if(!$_IN_IMPACT->show_impact_economic){
      return 0.0;
    }
    
    $result = $this->decomissioningActual() + $this->techImport() + $this->fuel() * $this->dispatchability;
    
    return $result;
  }
  
  public function impactEnvirontmental(){
    global $_IN_IMPACT;
    
    if(!$_IN_IMPACT->show_impact_environtmental){
      return 0.0;
    }
    
    $land_usage = $_IN_IMPACT->landUsage() * $this->conflictOfUse();
    $displaced_people = $_IN_IMPACT->displaced_redress * $this->displacedPeople();
    
    $result = $land_usage + $displaced_people;
    
    return $result;    
  }
  
  public function costExternality(){
    global $_IN_COST;
    
    if(!$_IN_COST->show_cost_externality){
      return 0.0;
    }
    
    $result = $this->impactEnvirontmental() + $this->impactEconomic() + $this->impactSocial();
    $result += $this->climateChange() + $this->nuclearFuelPostTreatment();
    
    return $result;
  }
  
  public function costTotal(){
    $result = $this->costExternality() + $this->costNet();
    
    return $result;
  }
  
  
  
  public function costMarginalEffect(){
    $result = $this->costTotal() * pow(($this->installed_capacity / $this->reference_capacity), $this->learning_exponent);
    
    return $result;
  }
  
  
  public function gasImport(){
    return 0.0;
  }
  
  
  
  
  
  
  public function co2Emission(){
    return 0.0;   
  }
  
  
  
  
  
  public function conflictOfUse(){
    return 0.0;
  }
  
  
  public function displacedPeople(){
    return 0.0;
  }
  
  public function nuclearFuelPostTreatment(){
    return 0.0;
  }
  
  
  /**
   * @brief Default shared method of coal depletion (will be override by children classes).
   * @return float Coal depletion
   */
  
  public function coalDepletion(){
    return 0.0;
  }
  
  
  
  
  
  /**
   * @brief Default shared method of fuel computation (will be override by children classes, every source has different formula). 
   * @return float Fuel Cost of fuel used in the power plant for producing electricity (variable cost during production only) [€/MWh]
   */
  
  public function fuel(){
    return 0.0;
  }
  
  
  

  
  
  
}
