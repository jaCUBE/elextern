<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InputImpact
 *
 * @author jaCUBE
 */

class DataImpact extends Data {
  public $eco_decomissioning_weight = 100;
  public $eco_technology_import_weight = 100;
  public $eco_fossil_fuel_weight = 100;
  
  public $env_compensation = 100000;
  
  public $soc_sick_leave = 45.6;
  public $soc_respiratory = 377;
  public $soc_cancer = 30000;
  public $soc_mortality = 2000000;
  
  public $lt_nuclear_waste_treatment = 3;
  public $lt_climate_start;
  public $lt_climate_cost;

  public $explicit_land_price = 0.5;
  public $explicit_co2_price = 80;
  
  
  
  
  
  
  
  
  public function prepareData(){
    $this->eco_decomissioning_weight /= 100;
    $this->eco_technology_import_weight /= 100;
    $this->eco_fossil_fuel_weight /= 100;
    
    $this->lt_nuclear_waste_treatment /= 100;    
    $this->lt_climate_cost /= 100;
  }
  
  
  public function getInput(){    
    $this->checkInput('env_compensation');
    
    $this->checkInput('soc_sick_leave');
    $this->checkInput('soc_respiratory');
    $this->checkInput('soc_cancer');
    $this->checkInput('soc_mortality');
    
    $this->checkInput('lt_nuclear_waste_treatment');
    $this->checkInput('lt_climate_start');
    $this->checkInput('lt_climate_cost');
  }
  
  public function defineConstant(){
    define('ECO_WEIGHT_DECOMISSIONING', $this->eco_decomissioning_weight);
    define('ECO_WEIGHT_TECH_IMPORT', $this->eco_technology_import_weight);
    define('ECO_WEIGHT_FOSSIL_FUEL', $this->eco_fossil_fuel_weight);
    
    define('ENV_COMPENSATION', $this->env_compensation);
    define('ENV_LAND_CONFLICT', $this->landConflict());
    
    define('SOC_SICK_LEAVE', $this->soc_sick_leave);
    define('SOC_RESPIRATORY', $this->soc_respiratory);
    define('SOC_CANCER', $this->soc_cancer);
    define('SOC_MORTALITY', $this->soc_mortality);
    
    define('LT_NUCLEAR_WASTE_TREATMENT', $this->lt_nuclear_waste_treatment);
    define('LT_CLIMATE_START', $this->lt_climate_start);
    define('LT_CLIMATE_COST', $this->lt_climate_cost);
    define('LT_CO2_EMISSION', $this->co2Emission());
    define('LT_CO2_COST_YEARLY', $this->co2CostYearly());
    
    define('EXPLICIT_LAND_PRICE', $this->explicit_land_price);
    define('EXPLICIT_CO2_PRICE', $this->explicit_co2_price);
  }
   
  
  
  public function landConflict(){
    if(!ADVANCED){
      return @$_POST['explicit_land_price'];
    }
    
    $result = WORLD_GDP / INHABITABLE_SURFACE / 1000;
    
    return $result;    
  }
  
  
  
  
  public function co2CostYearly(){
    $result = WORLD_GDP / CARBON_BUDGET * LT_CLIMATE_COST;
    
    return $result;
  }
  
  
  
  
  
  public function co2Emission(){
    if(!ADVANCED){
      return @$_POST['explicit_co2_price'];
    }
    
    $result_one = 1 - pow(1 + DISCOUNT_RATE, LT_CLIMATE_START - TIME_HORIZON);
    $result = $this->co2CostYearly() * $result_one / DISCOUNT_RATE;

    return $result;
  }
  
}
