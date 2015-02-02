<?php

/**
 * @package       Elextern
 * @subpackage    TechModel 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2014
 * 
 * @class TechModelGas
 * @brief Shared parent for all gas types of energy sources.
 */

class TechModelGas extends TechModel {
  
  /**
   * @brief Constructor calls parent's constructor.
   * @return void
   */
  
  public function __construct() {
    parent::__construct(); // Calling parent constructor
  }

  
  
  
  
  /**
   * @brief Overriden calculation of fuel for all gas technology.
   * @return float Cost of gas fuel
   */
  
  public function fuel(){
    $result = GAS_TOE / MWH_TOE / $this->eco_efficiency * GAS_PRICE; // Calculation by formula
    
    return $result; // Returning result
  }
  
  
  
  
  
  /**
   * @brief Overriden calculation of average CO2 emissions per MWh due to fossil fuel burning and construction works
   * @return float Average CO2 gas emission
   */
  
  public function co2Emission() {
    $result = GAS_CO2 / MWH_TOE / $this->eco_efficiency; // Calculation by formula
    
    return $result; // Returning result
  }
  
}
