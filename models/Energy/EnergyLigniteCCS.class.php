<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnergyLigniteCCS
 *
 * @author jaCUBE
 */
class EnergyLigniteCCS extends EnergyLigniteIGCC {
  
  public function __construct($country = 'cz') {
    $this->technology_id = 2;
    
    parent::__construct($country);
  }
  
  public function co2Emission(){
    return parent::co2Emission() * 0.1;
  }
  
}
