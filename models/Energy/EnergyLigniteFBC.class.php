<?php

/**
 * @package       Elextern
 * @subpackage    Energy 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2014
 * 
 * @class EnergyLigniteFBC
 * @brief Class for lignite FBC type of energy sources.
 */

class EnergyLigniteFBC extends EnergyLignite {
  
  /**
   * @brief ID of this technology
   * @var string $technology_id
   */
  
  public $technology_id = 'lignite_fbc';
  
  
  
  
  
  
  
  
  
  
  
  /**
   * @brief Constructor calls parent's constructor.
   * @return void
   */
  
  public function __construct() {    
    parent::__construct();
  }
}
