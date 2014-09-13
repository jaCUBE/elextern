<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestTable
 *
 * @author jaCUBE
 */

class TechList {
  public $tech = Array();
  
  
  public function __construct() {
    
    $this->prepareTech();
   
  }
  
  
  private function prepareTech(){
    $temp[] = new EnergyLigniteIGCC();
    $temp[] = EnergyLignitePCC();
    $temp[] = new EnergyLigniteFBC();
    $temp[] = new EnergyLigniteCHP();
    $temp[] = new EnergyLigniteCCS();
    
    $temp[] = new EnergyGasCCGT();
    $temp[] = new EnergyGasCHP();
    
    $temp[] = new EnergyNuclearGen2();
    $temp[] = new EnergyNuclearEPR();
    
    $temp[] = new EnergyHydroLarge();
    $temp[] = new EnergyHydroPumped();
    $temp[] = new EnergyHydroSmall();
    
    $temp[] = new EnergyWindOffshore();
    $temp[] = new EnergyWindOnshore();
    
    $temp[] = new EnergySolarRoof();
    $temp[] = new EnergySolarLand();
    
    $temp[] =  new EnergyBiomassFBC();
    $temp[] = new EnergyGeothermal();
    
    foreach($temp as $tech){
      if($tech->fossil_fuel){
        $type = 'Fossil fuel sources';
      }else{
        $type = 'Renewable sources';
      }
      
      $this->tech[$type][$tech->technology] = $tech;
      
    }
  }
  
}
