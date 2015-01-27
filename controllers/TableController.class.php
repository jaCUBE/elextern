<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TableController
 *
 * @author jaCUBE
 */
class TableController extends ExController {
  
  public function __construct() {    
    parent::__construct();
  }
  
  
  
  public function standard(){
    global $_EX;
    
    $this->data = new TechManager();
        
    $_EX->view('table_wrap', $this->data);
  }
  
}