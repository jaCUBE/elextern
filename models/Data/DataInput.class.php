<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataInput
 *
 * @author jaCUBE
 */
class DataInput {
    
  public function checkInput($name){
    if(!empty($_POST[$name])){
      $this->$name = $_POST[$name];
      return true;
    }
    return false;
  }
  
  
  public function checkCheckbox($name){
    if(!empty($_POST[$name])){
      $this->$name = true;
      return true;
    }
    
    $this->$name = false;
    return false;
  }
}
