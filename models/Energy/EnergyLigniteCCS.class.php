<?php

/**
 * @package       Elextern
 * @subpackage    Energy 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2014
 * 
 * @class EnergyLigniteCCS
 * @brief Class for lignite CCS type of energy sources.
 */

class EnergyLigniteCCS extends EnergyLignite {
  
  /**
   * @brief Name of this technology
   * @var string $technology
   */  
  public $technology = 'Lignite + CCS';
  
  
  
  
  
  
  
  
  
  
  
  /**
   * @brief Constructor calls parent's constructor.
   * @return void
   */
  
  public function __construct() {    
    parent::__construct(); // Calling parent's method
  }
  
  
  
  
  
  /**
   * @brief Overriden method. Lignite CCS produces only 10 % of CO2 emissions against lignite at all.
   * @return float CO2 emissions of lignite CCS
   */
  
  public function co2Emission(){
    $result = parent::co2Emission() * 0.1; // 10 % of shared lignite CO2 via parent's method
    
    return $result; // Returning result
  }
}
