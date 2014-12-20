<?php

/**
 * @package       Elextern
 * @subpackage    Energy 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2014
 * 
 * @class EnergyGasCCGT
 * @brief Class for gas CCGT type of energy sources.
 */

class EnergyGasCCGT extends EnergyGas {

  /**
   * @brief ID of this technology
   * @var string $technology_id
   */
  public $technology_id = 'gas_ccgt';
  
  
  
  
  
  
  
  
  
  
  
  /**
   * @brief Constructor calls parent's constructor.
   * @return void
   */
  
  public function __construct() {
    parent::__construct(); // Calling parent's constructor
  }
}
