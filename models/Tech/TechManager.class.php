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

class TechManager {
  public $tech = Array();
  public $tech_all = Array();
  
  public function __construct() {
    $this->prepareTech();
  }
  
  
  private function prepareTech(){
    $this->fetchTechManager();
    $this->checkVisibility();
  }
  
  
  private function fetchTechManager(){
    global $_EX, $_DB;
    
    $sql = '
      SELECT *
      FROM ex_tech
      WHERE visible = 1
      ORDER BY show_order ASC';
    
    $STH = $_DB->prepare($sql);
    $STH->setFetchMode(PDO::FETCH_OBJ);
    $STH->execute();
    
    while($obj = $STH->fetch()){
      $energy = $_EX->cloneObject($obj, $obj->model);
      
      $this->tech_all[] = $energy;
      $this->tech[] = $energy;
    }
  }
  
  
  public function checkVisibility(){
    global $_EX;
    
    foreach($this->tech as $index => $tech){
      
      if(!$tech->isFull() OR $tech->isDisabled()){
        unset($this->tech[$index]);
      }
      
      if(!$_EX->isLogged() AND $tech->show_demo == 0){
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
        <th>
          <?php echo $tech->technology; ?>
        </th>
        <?php } ?>
        
      </tr>
    </thead>


    <?php return ob_get_clean();
    
  }
  
}
