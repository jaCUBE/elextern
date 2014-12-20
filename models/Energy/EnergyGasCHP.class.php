<?php

/**
 * @package       Elextern
 * @subpackage    Energy 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2014
 * 
 * @class EnergyGasCHP
 * @brief Class for gas CHP type of energy sources.
 */

class EnergyGasCHP extends EnergyGas {

  /**
   * @brief ID of this technology
   * @var string $technology_id
   */
  public $technology_id = 'gas_chp';
  
  
  
  
  
  
  
  
  
  
  
  /**
   * @brief Constructor calls parent's constructor.
   * @return void
   */
  
  public function __construct() {
    parent::__construct(); // Calling parent's constructor
  }
  
}
