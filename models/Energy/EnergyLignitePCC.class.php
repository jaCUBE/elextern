<?php

/**
 * @package       Elextern
 * @subpackage    Energy 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2014
 * 
 * @class EnergyLignitePCC
 * @brief Class for lignite ICGCC type of energy sources.
 */

class EnergyLignitePCC extends EnergyLignite {
  /**
   * @brief Name of this technology
   * @var string $technology
   */
  
  public $technology = 'Lignite PCC';
  
  
  
  
  
  
  
  
  
  
  
  /**
   * @brief Constructor calls parent's constructor.
   * @return void
   */
  
  public function __construct() {    
    parent::__construct();
  }
}
