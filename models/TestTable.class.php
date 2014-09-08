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
    $this->tech['Lignite + CCS'] = new EnergyLigniteCCS();
    $this->tech['Gas CCGT'] = new EnergyGas();
    $this->tech['Biomass'] = new EnergyBiomass();
    $this->tech['Small hydro'] = new EnergyHydro();
    $this->tech['Nuclear'] = new EnergyNuclear();
    $this->tech['Geothermal'] = new EnergyGeothermal();
    $this->tech['Wind Onshore'] = new EnergyWindOnshore();
    $this->tech['Solar'] = new EnergySolar();
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
