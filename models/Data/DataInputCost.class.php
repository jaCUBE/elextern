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

class DataInputCost extends DataInput {
  public $discount_rate = 1;
  public $impact_environment = true;
  public $impact_economic = true;
  public $impact_social = true;
  public $climate_horizon = 200;
  public $climate_start = 50;
  public $climate_change = 5;
  public $climate_nuclear_fuel = 10;
  
  public $show_cost_net = true;
  public $show_cost_externality = true;
  
  
  public function __construct() {
    
    $this->getInput();
    
    $this->discount_rate /= 100;
    $this->climate_change /= 100;
    $this->climate_nuclear_fuel /= 100;
  }
  
  public function getInput(){
    $this->checkInput('discount_rate');
    $this->checkInput('climate_horizon');
  }
  
  public function getDiscountRate(){
    return $this->discount_rate;
  }

  
}
