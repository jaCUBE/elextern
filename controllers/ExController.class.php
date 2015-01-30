<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ExController
 *
 * @author jaCUBE
 */
class ExController {
  public $data;
  
  
  
  public function __construct() {
    global $_EX;
    
    $this->data = new stdClass();
    
    if(empty($_GET['action'])){
      $this->standard();
    }
    

  }
  
  
  

  
}
