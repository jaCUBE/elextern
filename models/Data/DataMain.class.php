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

class DataMain extends Data {
  public $time_horizon;
  public $discount_rate;
  
  public $show_cost_net = true;
  public $show_cost_externality = true;
  
  public $impact_environment = true;
  public $impact_economic = true;
  public $impact_social = true;
  public $impact_longterm = true;
  
  public $show_capex = true;
  public $show_opex = true;
  public $show_fuel = true;
  
  
  
  public function prepareData() {
    $this->checkDiscountRate();
    
    $this->discount_rate /= 100;
  }

  public function defineConstant(){
    define('TIME_HORIZON', $this->time_horizon);
    define('DISCOUNT_RATE', $this->discount_rate);
    define('SHOW_COST_NET', $this->show_cost_net);
    define('SHOW_COST_EXTERNALITY', $this->show_cost_externality);
    define('SHOW_IMPACT_ENVIRONMENT', $this->impact_environment);
    define('SHOW_IMPACT_ECONOMIC', $this->impact_economic);
    define('SHOW_IMPACT_SOCIAL', $this->impact_social);
    define('SHOW_IMPACT_LONGTERM', $this->impact_longterm);
    
    define('SHOW_CAPEX', $this->show_capex);
    define('SHOW_OPEX', $this->show_opex);
    define('SHOW_FUEL', $this->show_fuel);
  }
  
  
  public function getInput(){
    if(empty($_POST)){
      return false;
    }
    
    $this->checkInput('discount_rate');
    $this->checkInput('time_horizon');
    
    $this->checkCheckbox('impact_environment');
    $this->checkCheckbox('impact_social');
    $this->checkCheckbox('impact_economic');
    $this->checkCheckbox('impact_longterm');
    
    $this->checkCheckbox('show_capex');
    $this->checkCheckbox('show_opex');
    $this->checkCheckbox('show_fuel');
  }

  
  public function getTimeHorizon() {
    return $this->time_horizon;
  }

  public function checkDiscountRate() {
    if($this->discount_rate <= 0){
     $this->discount_rate = 10e-10;
    }
  }



  

  
}
