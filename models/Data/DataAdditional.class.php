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
  public $world_gdp;
  public $inhabitable_surface;
  public $carbon_budget;
  public $nuclear_exclusion;
  public $nuclear_accident;
  public $loc_population;
  public $loc_surface_lignite;
  public $loc_solar_density;
  
  public function getInput(){    
    $this->checkInput('world_gdp');
    $this->checkInput('inhabitable_surface');
    $this->checkInput('carbon_budget');
    $this->checkInput('nuclear_exclusion');
    $this->checkInput('nuclear_accident');
    
    $this->checkInput('loc_population');
    $this->checkInput('loc_surface_lignite');
    $this->checkInput('loc_solar_density');
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
