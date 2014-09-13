<?php

/**
 * @package       Elextern
 * @subpackage    Energy 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2014
 * 
 * @class EnergyLigniteCHP
 * @brief Class for lignite CHP type of energy sources.
 */

class EnergyLigniteCHP extends EnergyLignite {
  
  /**
   * @brief Name of this technology
   * @var string $technology
   */
  
  public $technology = 'Lignite CHP';
  
  
  
  
  
  
  
  
  
  
  
  /**
   * @brief Constructor calls parent's constructor.
   * @return void
   */
  
  public function __construct() {    
    parent::__construct();
  }
}
