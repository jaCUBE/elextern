<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Input
 *
 * @author jaCUBE
 */
class DataInputCost {
  public $discount_rate = 1;
  public $impact_environment = true;
  public $impact_economic = true;
  public $impact_social = true;
  public $climate_horizon = 200;
  public $climate_start = 50;
  public $climate_change = 5;
  public $climate_nuclear_fuel = 10;  
  
  
  public function __construct() {
    $this->discount_rate /= 100;
    $this->climate_change /= 100;
    $this->climate_nuclear_fuel /= 100;
  }
  
  
  public function getDiscountRate(){
    return $this->discount_rate;
  }
  
}
