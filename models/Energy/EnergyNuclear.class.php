<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnergyNuclear
 *
 * @author jaCUBE
 */
class EnergyNuclear extends EnergyCommon {
  
  public function __construct($country = 'cz') {
    parent::__construct(6, $country);
  }
  
  
  public function fuel(){
    return 7 * 0.68;
  }
  
  
  public function conflictOfUse() {
    global $_DATA_GLOBAL, $_IN_COST;
    
    $result_one = pow($_DATA_GLOBAL->nuclear_exclusion, 2) * pi() / $_DATA_GLOBAL->nuclear_accident;
    $result_two = $_IN_COST->climate_horizon / $this->lifetime;
    $result = $result_one * $result_two;
    
    return $result;    
  }
  
  public function displacedPeople() {
    global $_DATA_GLOBAL, $_DATA_LOCAL;
    
    $result = pow($_DATA_GLOBAL->nuclear_exclusion, 2) * pi() / $_DATA_GLOBAL->nuclear_accident / 1000000 * $_DATA_LOCAL->population_density;
    
    return $result;    
  }
  
  
  public function co2Emission() {
    return 0.006;
  }
  
  public function nuclearFuelPostTreatment() {
    global $_IN_COST;
    
    $result_one = $this->fuel() * $_IN_COST->climate_nuclear_fuel;
    $result_two = 1 - pow(1 - $_IN_COST->getDiscountRate(), $_IN_COST->climate_horizon + 1);
    $result = $result_one * $result_two / $_IN_COST->getDiscountRate();
    
    return $result;
    
  }
  
}
