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
class TestTable {
  public $tech = Array();
  
  
  public function __construct() {
    $this->tech['Lignite IGCC'] = new EnergyLigniteIGCC();
    $this->tech['Lignite PCC'] = new EnergyLignitePCC();
    $this->tech['Lignite FBC'] = new EnergyLigniteFBC();
    $this->tech['Lignite CHP'] = new EnergyLigniteCHP();
    $this->tech['Lignite + CCS'] = new EnergyLigniteCCS();
    
    $this->tech['Gas CCGT'] = new EnergyGasCCGT();
    $this->tech['Gas CHP'] = new EnergyGasCHP();
    
    $this->tech['FBC Biomass'] = new EnergyBiomassFBC();
    
    $this->tech['Nuclear Gen II'] = new EnergyNuclearGen2();
    $this->tech['Nuclear EPR'] = new EnergyNuclearEPR();
    
    $this->tech['Geothermal'] = new EnergyGeothermal();
    
    $this->tech['Large Hydro'] = new EnergyHydroLarge();
    $this->tech['Pumped Hydro'] = new EnergyHydroPumped();
    $this->tech['Small Hydro'] = new EnergyHydroSmall();
    
    $this->tech['Onshore Wind'] = new EnergyWindOnshore();
    $this->tech['Offshore Wind'] = new EnergyWindOffshore();
    
    $this->tech['Solar Roof'] = new EnergySolarRoof();
    $this->tech['Solar Land'] = new EnergySolarLand();

  }
  
  
  public function tableHeader(){
    $output = '<th>Attribute</td>';
    
    foreach($this->tech as $name => $tech){
      $output .= '<th>'.$name.'</th>';
    }
    
    $output = '<tr>'.$output.'</tr>';
    
    return $output;
  }
  
  
  public function walkProperty($name, $property){
    $output = '<td>'.$name.'</td>';
    
    foreach($this->tech as $name => $tech){
      $output .= '<td>'.$tech->$property.'</td>';
    }
    
    $output = '<tr class="property">'.$output.'</tr>';
    
    return $output;
  }
  
  
  
  public function walkMethod($name, $method){
    $output = '<td>'.$name.'</td>';
    
    foreach($this->tech as $name => $tech){
      $output .= '<td>'.round($tech->$method(), 2).'</td>';
    }
    
    $output = '<tr class="method">'.$output.'</tr>';
    
    return $output;
  }
  
  
}
