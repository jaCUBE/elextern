<?php

/**
 * @package       Elextern
 * @subpackage    TechModel 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2015
 * 
 * @class TechModelWindOffshore
 * @brief Class for wind energy source technology located offshore.
 */

class TechModelWindOffshore extends TechModelWind {

  /**
   * @brief Constructor calls parent's constructor.
   * @return void
   */
  
  public function __construct() {    
    parent::__construct();
  } 
}
