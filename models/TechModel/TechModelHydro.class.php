<?php

/**
 * @package       Elextern
 * @subpackage    TechModel 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2015
 * 
 * @class TechModelHydro
 * @brief Shared parent for all hydro types of energy sources.
 */

class TechModelHydro extends TechModel {
  
  /**
   * @brief Constructor calls parent's constructor.
   * @return void
   */
  
  public function __construct() {
    parent::__construct(); // Calling parent's constructor
  }

  
}
