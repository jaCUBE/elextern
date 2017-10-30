<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChartController
 *
 * @author jaCUBE
 */
class ChartController extends ExController {
  
  public function __construct() {
    global $_EX;
    
    parent::__construct();
  }
  
  
  public function standard(){   
    global $_EX;
    
    $this->data = new TechManager();
    
    $_EX->view('chart', $this->data);
  }
}
