<?php

/**
 * @package       Elextern
 * @subpackage    TechModel 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2014
 * 
 * @class TechModelHydroLarge
 * @brief Class for large hydro type of energy sources.
 */

class TechModelHydroLarge extends TechModelHydro {

  /**
   * @brief Constructor calls parent's constructor.
   * @return void
   */
  
  public function __construct() {    
    parent::__construct(); // Calling parent's constructor
  }
  
  
  
  
  
  /**
   * @brief Overriden calculation for extended land use.
   * @return float Extended land use for large hydro.
   */
  
  public function extendedLandUse() {
    return $this->env_land_use; // Returning result
  }
}
