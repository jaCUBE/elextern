<?php

/**
 * @package       Elextern
 * @subpackage    Energy 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2014
 * 
 * @class EnergyHydroPumped
 * @brief Class for pumped hydro type of energy sources.
 */

class EnergyHydroPumped extends EnergyHydro {
    
  /**
   * @brief Name of this technology
   * @var string $technology
   */
  public $technology = 'Pumped Hydro';
  
  
  
  
  
  
  
  
  
  
  
  /**
   * @brief Constructor calls parent's constructor.
   * @return void
   */
  
  public function __construct() {    
    parent::__construct(); // Calling parent's constructor
  }
  
  
  
  
  
  /**
   * @brief Overriden calculation for extended land use.
   * @return float Extended land use for pumped hydro.
   */
  
  public function extendedLandUse() {
    $result = 5100000 / 762000; // Calculating extended land use value
    
    return $result; // Returning result
  }
  
  
  
  
  
  /**
   * @brief Overriden calculation for fost of fuel used in the power plant for producing electricity (variable cost during production only).
   * @return float Cost of fuel used in the power plant 
   */
  
  public function fuel(){
    global $_YIELD_CALC;
    
    $result = $_YIELD_CALC->interpolationYield($this->load_factor / $this->eco_efficiency, 'day', 'lowest'); // Interpolation of lowest daily price for load factor / efficiency
    $result /= $this->eco_efficiency; // Previous result divided by efficiency
    
    return $result; // Returning result
  }
}
