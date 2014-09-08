<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataLocal
 *
 * @author jaCUBE
 */
class DataLocal {
  public $row_id;
  public $country_code;
  public $population_density;
  public $lignite_density;
  public $pv_density;
  public $visible;
  public $added;
  public $changed;
  
  
  public function __construct($country_code = 'cz') {
    $this->country_code = $country_code;
    
    $this->fetchDataLocal();
  }
  
  
  public function fetchDataLocal(){
    global $_DB;
    
    $sql = '
      SELECT *
      FROM data_local
      WHERE country_code = :country_code
        AND visible = 1
      LIMIT 1';
    
    $STH = $_DB->prepare($sql);
    $STH->bindParam(':country_code', $this->country_code);
    $STH->setFetchMode(PDO::FETCH_INTO, $this);
    $STH->execute();
    
    $STH->fetch();
  }
}
