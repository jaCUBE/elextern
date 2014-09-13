<?php

/**
 * @package       Elextern
 * @subpackage    Energy 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2014
 * 
 * @class EnergyBiomass
 * @brief Shared parent for all biomass types of energy sources.
 */

class EnergyBiomass extends Energy {
  
  /**
   * @brief Constructor calls parent's constructor.
   * @return void
   */
  
  public function __construct() {
    parent::__construct(); // Calling parent constructor
  }
  
  
  
  
  
  /**
   * @brief Overriden calculation of fuel for all biomass technology.
   * @return float Cost of biomass fuel
   */
  
  public function fuel(){
    return 27.11 * 0.68; // Hard-coded value for biomass
  }
  
}
