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
    $result = 5100000 / 762000 / $this->lifetime * $this->discounting() / DISCOUNT_RATE; // Calculating extended land use value according to formula
    
    return $result; // Returning result
  }
  
  
  
  
  public function fuel(){
    return 23.77;
  }
}
