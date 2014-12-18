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
    $this->tech[] = new EnergyLigniteIGCC();
    $this->tech[] = new EnergyLignitePCC();
    $this->tech[] = new EnergyLigniteFBC();
    $this->tech[] = new EnergyLigniteCHP();
    $this->tech[] = new EnergyLigniteCCS();
    
    $this->tech[] = new EnergyGasCCGT();
    $this->tech[] = new EnergyGasCHP();
    
    $this->tech[] = new EnergyNuclearGen2();
    $this->tech[] = new EnergyNuclearEPR();
    
    $this->tech[] = new EnergyHydroLarge();
    $this->tech[] = new EnergyHydroPumped();
    $this->tech[] = new EnergyHydroSmall();
    
    $this->tech[] = new EnergyWindOffshore();
    $this->tech[] = new EnergyWindOnshore();
    
    $this->tech[] = new EnergySolarRoof();
    $this->tech[] = new EnergySolarLand();
    
    $this->tech[] =  new EnergyBiomassFBC();
    $this->tech[] = new EnergyGeothermal();
    
    $this->checkFull();
  }
  
  
  public function checkFull(){
    foreach($this->tech as $index => $tech){
      if(!$tech->isFull()){
        unset($this->tech[$index]);
      }
    }
  }
  
  
  public function htmlTableHeader(){
    
    ob_start(); ?>

    <thead>
      <tr>
        <th class="legend">Value</th>
        
        <?php foreach($this->tech as $tech){ ?>
        <th class="<?php echo $tech->cssClass(); ?>">
          <?php echo $tech->technology; ?>
        </th>
        <?php } ?>
        
      </tr>
    </thead>


    <?php return ob_get_clean();
    
  }
  
}
