<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnergySolarLand
 *
 * @author jaCUBE
 */
class EnergySolarLand extends EnergySolar {
  /**
   * @brief ID of this technology
   * @var string $technology_id
   */
  
  public $technology_id = 'solar_land';
  
  
  
  
  
  
  
  
  
  
  
  /**
   * @brief Constructor calls parent's constructor.
   * @return void
   */
  
  public function __construct() {    
    parent::__construct();
  } 
  
  
  public function extendedLandUse() {
    $result = 1000 / (LOCAL_DENSITY_SOLAR * $this->load_factor);
    
    return $result;
  }
  
}
