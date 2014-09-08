<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnergyLigniteIGCC
 *
 * @author jaCUBE
 */
class EnergyLigniteIGCC extends EnergyCommon {
  
  
  public $toe = 3;
  public $toe_co2 = 3.96;
  
  public function __construct($country = 'cz') {    
    if(empty($this->technology_id)){
      parent::__construct(1, $country);
    }else{
      parent::__construct(2, $country);
    }
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
  
  public function co2Emission(){
    global $_IN_COST;

    $result = $this->toe_co2 / $this->toe * $this->coalDepletion();
    
    return $result;    
  }
  
  public function conflictOfUse() {
    global $_DATA_LOCAL;
    
    $result = $this->coalDepletion() / $_DATA_LOCAL->lignite_density;
    
    return $result;
  }
}
