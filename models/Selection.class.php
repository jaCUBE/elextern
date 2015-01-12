<?php

class Selection {
  public $energy = Array();
  
  
  public function fetchName(){
    global $_DB;
    
    $sql = '
      SELECT *
      FROM energy
      WHERE visible = 1
      ORDER BY technology ASC';
    
    $STH = $_DB->prepare($sql);
    $STH->setFetchMode(PDO::FETCH_CLASS, 'Energy');
    $STH->execute();
    
    while($obj = $STH->fetch()){
      if($obj->isFull()){
        $this->energy[] = $obj;
      }
    } 
  }
  
  
  
}