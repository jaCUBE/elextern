<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnergyBiomass
 *
 * @author jaCUBE
 */
class EnergyBiomass extends EnergyCommon {
 
  public function __construct($country = 'cz') {
    parent::__construct(4, $country);
  }
  
  
  public function fuel(){
    return 27.11 * 0.68;    
  }
  
  
  public function co2Emission() {
    return 0.007;
  }
  
}
