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
}