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
  public $efficiency;
  public $dispatchability;
  public $fossil_fuel;
  public $construction_time;
  public $capex;
  public $lifetime;
  public $foreign_purchases;
  public $grid_connection;
  public $opex;
  public $decomissionning;
  public $reference_capacity;
  public $learning_potential_exponent;
  public $load_factor_used;
  public $load_factor_max;
  public $installed_capacity;
  public $visible;
  public $added;
  public $timestamp;
  
  public $toe = false;
  public $co2 = false;
  public $toe_thermal_mwh = 11.7;
  
  
  
  
  public function __construct($technology = 1, $country = 'cz') {
    $this->technology_id = $technology;
    $this->country_code = $country;
    
    $this->fetchTechnology();
    
    $this->efficiency /= 100;
    $this->opex /= 100;
    $this->load_factor_max /= 100;
    $this->load_factor_used /= 100;
    $this->foreign_purchases /= 100;
    $this->decomissionning /= 100;
  }
  
  
  
  private function fetchTechnology(){
    global $_DB;

    $sql = '
      SELECT *
      FROM energy
      WHERE country_code = :country_code
        AND technology_id = :technology_id
        AND visible = 1
      LIMIT 1';
    
    $STH = $_DB->prepare($sql);
    $STH->bindParam(':country_code', $this->country_code);
    $STH->bindParam(':technology_id', $this->technology_id);
    $STH->setFetchMode(PDO::FETCH_INTO, $this);
    $STH->execute();
    
    $STH->fetch();    
  }
  
  
  
  
  
  public function capexIDR(){
    global $_IN_COST;
    
    $result_one = $this->capex / $this->construction_time;
    $result_two = (pow(1 + $_IN_COST->getDiscountRate(), $this->construction_time) - 1) / $_IN_COST->getDiscountRate();
    $result = ($result_one * $result_two) + $this->grid_connection;

    return $result;
  }
  
  
  
  
  public function capexActual(){
    global $_IN_COST;
    
    $result_one = (1000 * ($this->capexIDR())) / (8760 * $this->load_factor_used);
    $result_two = 1 - pow(1 + $_IN_COST->getDiscountRate(), -$this->lifetime);
    $result = $result_one * ($_IN_COST->getDiscountRate() / $result_two);
    
    return $result;
  }
  
  
  
  
  
  public function opexActual(){
    $result = $this->opex * $this->capex * 1000 / (8760 * $this->load_factor_used);
    
    return $result;
  }
  
  
  
  public function coalDepletion(){
    return 0;
  }
  
  
  
  
  public function fuel(){
    return 0;
  }
  
  
  
  
  public function lcoe(){
    $result = $this->fuel() + $this->capexActual() + $this->opexActual();
    
    return $result;
  }
  
  
  
  public function yieldFlexibility(){
    global $_YIELD_CALC;
    
    if(!$this->dispatchability){
      return 0;
    }
    
    $result_one = $_YIELD_CALC->interpolationYield($this->load_factor_used);
    $result_two = $_YIELD_CALC->highest->highest_price_y;
    
    $result = $result_two - $result_one;
    
    return $result;
  }
  
  
  
  
  public function netCost(){
    $result = $this->lcoe() + $this->yieldFlexibility();
    
    return $result;
  }
  
  
  
  public function yearlyCo2Cost(){
    global $_IN_COST;
    
    $result_one = $_IN_COST->getDiscountRate();
    $result_two = 1 - pow(1 + $_IN_COST->getDiscountRate(), -$this->lifetime);
    
    $result = $result_one / $result_two;
    
    return $result;
  }
  
  
  
  
  public function energyProduced(){
    $result = $this->load_factor_used * $this->installed_capacity;
    
    return $result;    
  }
  
  
  
  public function gasImport(){
    return 0;
  }
  
}
