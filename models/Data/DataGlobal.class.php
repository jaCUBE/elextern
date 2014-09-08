<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataAdditional
 *
 * @author jaCUBE
 */
class DataGlobal {
  public $row_id;
  public $world_gdp;
  public $inhabitable_surface;
  public $carbon_budget;
  public $nuclear_exclusion;
  public $nuclear_accident;
  public $visible;
  public $added;
  public $timestamp;
  
  
  
  public function __construct(){
    $this->fetchGlobal();
  }
  
  
  
  public function fetchGlobal(){
    global $_DB;
    
    $sql = '
      SELECT *
      FROM data_global
      WHERE visible = 1
      LIMIT 1';
    
    $STH = $_DB->prepare($sql);
    $STH->setFetchMode(PDO::FETCH_INTO, $this);
    $STH->execute();
    
    $STH->fetch();
    
  }

  
}
