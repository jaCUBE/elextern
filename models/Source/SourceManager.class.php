<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SourceList
 *
 * @author jaCUBE
 */
class SourceManager {
  public $source_list = Array();
  
  public function fetchSourceList(){
    global $_DB;
    
    $sql = '
      SELECT *
      FROM source_list
      WHERE visible = 1
      ORDER BY show_order ASC';
    
    $STH = $_DB->prepare($sql);
    $STH->setFetchMode(PDO::FETCH_CLASS, 'Source');
    $STH->execute();
    
    while($obj = $STH->fetch()){
      $this->source_list[] = $obj;
    }
  }
}
