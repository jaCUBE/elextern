<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnergyGas
 *
 * @author jaCUBE
 */
class EnergyGas extends EnergyCommon {
  
  public $toe = 40;
  public $toe_co2 = 2.35;
  
  public function __construct($country = 'cz') {
    parent::__construct(3, $country);
  }
  
  public function gasImport(){
    $result = $this->toe / $this->toe_thermal_mwh / $this->efficiency;
    
    return $result;
  }
  
  
  public function fuel(){
    global $_IN_IMPACT;
    
    $result = $_IN_IMPACT->gas_price * $this->gasImport();
    
    return $result;
  }
  
  
  public function co2Emission() {
    $result = $this->toe_co2 / $this->toe * $this->gasImport();
    
    return $result;
  }
  
}
