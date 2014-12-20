<?php

/**
 * @package       Elextern
 * @subpackage    Energy 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2014
 * 
 * @class EnergyGeothermal
 * @brief Shared parent for all geothermal types of energy sources.
 */

class EnergyGeothermal extends Energy {

  /**
   * @brief Constructor calls parent's constructor.
   * @return void
   */
  
  public function __construct() {    
    parent::__construct(); // Calling parent's constructor
  }  
}
