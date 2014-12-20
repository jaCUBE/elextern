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
    $this->fetchTechList();
    
    $this->checkFull();
  }
  
  
  private function fetchTechList(){
    global $_EX, $_DB;
    
    $sql = '
      SELECT *
      FROM energy
      WHERE visible = 1
      ORDER BY show_order ASC';
    
    $STH = $_DB->prepare($sql);
    $STH->setFetchMode(PDO::FETCH_OBJ);
    $STH->execute();
    
    while($obj = $STH->fetch()){
      $energy = $_EX->cloneObject($obj, $obj->model);
      $this->tech[] = $energy;
    }
    
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
