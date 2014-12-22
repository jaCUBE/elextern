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
  public $oil_price;
  public $oil_toe;
  public $oil_co2;
  
  public $gas_price;
  public $gas_toe;
  public $gas_co2;
  
  public $coal_price;
  public $coal_toe;
  public $coal_co2;
  
  public $lignite_price;
  public $lignite_toe;
  public $lignite_co2;
  
  public $mwh_toe;
  
  
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
