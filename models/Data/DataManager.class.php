<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataManager
 *
 * @author jaCUBE
 */
class DataManager {
  
  public $data = Array();
  
  public function __construct() {
    $this->data['DataMain'] = new DataMain();
    $this->data['DataEnergyUnit'] = new DataEnergyUnit();
    $this->data['DataAdditional'] = new DataAdditional();
    $this->data['DataImpact'] = new DataImpact();
  }
  
  
  public function fetchDefaultValue(){
    global $_DB;
    
    $sql = '
      SELECT *
      FROM default_value';
    
    $STH = $_DB->prepare($sql);
    $STH->setFetchMode(PDO::FETCH_OBJ);
    $STH->execute();
    
    while($obj = $STH->fetch()){
      $name = $obj->name;
      
      $this->data[$obj->category]->$name = $obj->value;
    }
  }
  
  
  
  public function processData(){
    foreach($this->data as $data){
      $data->getInput();
      $data->prepareData();
      $data->defineConstant();
    }
  }
  
  
}
