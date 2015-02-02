<?php

/**
 * @package       Elextern
 * @subpackage    TechModel 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2015
 * 
 * @class TechModelSolarLand
 * @brief Class for photovoltaic (PV) solar energy source located on land.
 */

class TechModelSolarLand extends TechModelSolar {

  /**
   * @brief Constructor calls parent's constructor.
   * @return void
   */
  
  public function __construct() {    
    parent::__construct();
  } 
  
  
  
  
  
  /**
   * @brief Overriden method. Extended land use for the installations and upstream activities (mining) leading to loss of biodiversity and the free services offered by nature. Will be override by children classes since every source has different formula. 
   * @return float Costs of extended land use for solar land
   */
  
  public function extendedLandUse() {
    $result = 1000 / (LOCAL_DENSITY_SOLAR * $this->load_factor); // Formula calculating extended land use for solar land
    
    return $result;
  }
  
}
