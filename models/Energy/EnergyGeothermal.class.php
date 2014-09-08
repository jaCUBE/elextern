<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnergyGeothermal
 *
 * @author jaCUBE
 */
class EnergyGeothermal extends EnergyCommon {
  
  public $toe = 11.7;
  public $co2 = 0;
  
  public function __construct($country = 'cz') {
    parent::__construct(7, $country);
  }
}
