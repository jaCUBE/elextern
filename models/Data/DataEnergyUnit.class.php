<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataEnergyUnit
 *
 * @author jaCUBE
 */
class DataEnergyUnit extends Data {
  public $oil_price = 83.16;
  public $oil_toe = 0.1364;
  public $oil_co2 = 3.07;
  
  public $gas_price = 7;
  public $gas_toe = 40;
  public $gas_co2 = 2.35;
  
  public $coal_price = 63.14;
  public $coal_toe = 1.5;
  public $coal_co2 = 3.96;
  
  public $lignite_price = 21;
  public $lignite_toe = 3;
  public $lignite_co2 = 3.96;
  
  public $mwh_toe = 11.7;
  
  
  public function __construct() {
    $this->getInput();
    
    $this->defineConstant();
  }
  
  
  public function getInput(){    
    $this->checkInput('oil_price');
    $this->checkInput('gas_price');
    $this->checkInput('coal_price');
    $this->checkInput('lignite_price');
  }
  
  
  public function defineConstant(){
    define('OIL_PRICE', $this->oil_price);
    define('OIL_TOE', $this->oil_toe);
    define('OIL_CO2', $this->oil_co2);
    
    define('GAS_PRICE', $this->gas_price);
    define('GAS_TOE', $this->gas_toe);
    define('GAS_CO2', $this->gas_co2);
    
    define('COAL_PRICE', $this->coal_price);
    define('COAL_TOE', $this->coal_toe);
    define('COAL_CO2', $this->coal_co2);
    
    define('LIGNITE_PRICE', $this->lignite_price);
    define('LIGNITE_TOE', $this->lignite_toe);
    define('LIGNITE_CO2', $this->lignite_co2);
    
    define('MWH_TOE', $this->mwh_toe);
  }
  
  
  
}
