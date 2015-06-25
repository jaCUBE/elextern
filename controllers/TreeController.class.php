<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TreeController
 *
 * @author jaCUBE
 */
class TreeController extends ExController {
  
  public function __construct() {    
    parent::__construct();
  }
  
  
  
  public function standard(){
    global $_EX;
    
    $_EX->view('tree', $this->data);
  }
  
}