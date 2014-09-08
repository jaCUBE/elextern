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
class EnergyLigniteCCS extends EnergyCommon {
  
  public $toe = 3;
  public $co2 = 3.96;
  
  public function __construct($country = 'cz') {
    parent::__construct(2, $country);
  }
  
  
  public function coalDepletion(){
    $result = $this->toe / $this->toe_thermal_mwh / $this->efficiency;
    
    return $result;
  }
  
  public function fuel(){
    global $_IN_IMPACT;
    
    $result = $_IN_IMPACT->coal_price * $this->coalDepletion();
    
    return $result;
  }
  
}
