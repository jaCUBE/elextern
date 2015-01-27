<?php

/**
 * @package       Elextern
 * @subpackage    TechModel 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2014
 * 
 * @class TechModelLignite
 * @brief Class for all lignite type of energy sources.
 */

class TechModelLignite extends TechModel {

  /**
   * @brief Calculates fuel value for all lignite type of energy sources.
   * @return float Value of fuel for lignite source type
   */
  
  public function fuel(){
    $result = LIGNITE_TOE / MWH_TOE / $this->eco_efficiency * LIGNITE_PRICE;
    
    return $result;
  }
  
  
  
  
  public function extendedLandUse(){
    $result = LIGNITE_TOE / MWH_TOE / $this->eco_efficiency / LOCAL_DENSITY_LIGNITE * $this->lifetime;
    
    return $result;
  }
  
  
  
  public function co2(){
    $result = DISCOUNT_RATE / (1 - pow(1 + DISCOUNT_RATE, -$this->lifetime));
    
    return $result;    
  }
  
  
  public function co2Emission(){
    $result = LIGNITE_CO2 / MWH_TOE / $this->eco_efficiency;
    
    return $result;
  }
  
}
