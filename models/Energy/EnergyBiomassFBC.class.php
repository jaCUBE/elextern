<?php

/**
 * @package       Elextern
 * @subpackage    Energy 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2014
 * 
 * @class EnergyBiomassFBC
 * @brief Class for FBC biomass type of energy sources.
 */

class EnergyBiomassFBC extends EnergyBiomass {
    
  /**
   * @brief Name of this technology
   * @var string $technology
   */
  
  public $technology = 'FBC Biomass';
  
  
  
  
  
  
  
  
  
  
  
  /**
   * @brief Constructor calls parent's constructor.
   * @return void
   */
  
  public function __construct() {    
    parent::__construct();
  }
}
