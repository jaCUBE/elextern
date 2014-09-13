<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataAdditional
 *
 * @author jaCUBE
 */

class DataAdditional extends Data {
  public $world_gdp = 56000;
  public $inhabitable_surface = 107;
  public $carbon_budget = 700;
  public $nuclear_exclusion = 30;
  public $nuclear_accident = 36125;
  public $loc_population = 134;
  public $loc_surface_lignite = 21;
  public $loc_solar_density = 100;
  
  public function __construct() {
    
    
    $this->defineConstant();
  }
  
  public function defineConstant(){
    define('WORLD_GDP', $this->world_gdp);
    define('INHABITABLE_SURFACE', $this->inhabitable_surface);
    define('CARBON_BUDGET', $this->carbon_budget);
    define('NUCLEAR_EXCLUSION', $this->nuclear_exclusion);
    define('NUCLEAR_ACCIDENT', $this->nuclear_accident);
    define('LOCAL_DENSITY_POPULATION', $this->loc_population);
    define('LOCAL_DENSITY_LIGNITE', $this->loc_surface_lignite);
    define('LOCAL_DENSITY_SOLAR', $this->loc_solar_density);
  }
  
}
