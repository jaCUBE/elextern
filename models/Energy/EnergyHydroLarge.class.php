<?php

/**
 * @package       Elextern
 * @subpackage    Energy 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2014
 * 
 * @class EnergyHydroLarge
 * @brief Class for large hydro type of energy sources.
 */

class EnergyHydroLarge extends EnergyHydro {
    
  /**
   * @brief Name of this technology
   * @var string $technology
   */
  public $technology = 'Large Hydro';
  
  
  
  
  
  
  
  
  
  
  
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
    $result = 27300000 / 300000; // Calculating extended land use value
    
    return $result; // Returning result
  }
}
