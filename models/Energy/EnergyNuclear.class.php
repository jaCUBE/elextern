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
class EnergyNuclear extends Energy {
  
  public function __construct() {
    parent::__construct();
  }
  
  
  public function fuel(){
    return 7 * 0.68;
  }
  
  
  public function extendedLandUse() {
    
    
    $result = pow(NUCLEAR_EXCLUSION, 2) * pi() / NUCLEAR_ACCIDENT * TIME_HORIZON;
    
    return $result;    
  }
  
  public function displacedPeople() {
    $result = pow(NUCLEAR_EXCLUSION, 2) * pi() / NUCLEAR_ACCIDENT * LOCAL_DENSITY_POPULATION / 1000000;

    return $result;    
  }
  

  public function impactLongtermNuclearWasteTreatment() {    
    $result_one = $this->fuel() * LT_NUCLEAR_WASTE_TREATMENT;
    $result_two = 1 - pow(1 + DISCOUNT_RATE, -TIME_HORIZON);
    $result = $result_one * $result_two / DISCOUNT_RATE;
    
    return $result;
  }
  
}
