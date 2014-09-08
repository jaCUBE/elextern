<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InputImpact
 *
 * @author jaCUBE
 */
class DataInputImpact {
  public $displaced_redress = 100000;
  public $coal_price = 21;
  public $gas_price = 7;
  public $health_respiratory = 1107;
  public $health_cancer = 110700;
  public $health_mortality = 2000000;
  
  public $show_impact_environtmental = true;
  public $show_impact_economic = true;
  public $show_impact_social = true;  
  
  
  
  
  public function landUsage(){
    global $_DATA_GLOBAL;
    
    $result = $_DATA_GLOBAL->world_gdp / $_DATA_GLOBAL->inhabitable_surface / 1000;
    
    return $result;    
  }
  
  public function costCo2(){
    global $_DATA_GLOBAL, $_IN_COST;
    
    $result = $_DATA_GLOBAL->world_gdp / $_DATA_GLOBAL->carbon_budget * $_IN_COST->climate_change;
    
    return $result;
  }
  
  
  public function implicitCo2Price(){
    global $_IN_COST;
    
    $result_one = $this->costCo2();
    $result_two = 1 + $_IN_COST->getDiscountRate();
    $result_three = $_IN_COST->climate_start - $_IN_COST->climate_horizon;
    $result_four = $_IN_COST->getDiscountRate();
    
    $result = $result_one * (1 - pow($result_two, $result_three)) / $result_four;
    
    return $result;
  }
  
}
