<?php

/**
 * @package       Elextern
 * @subpackage    TechModel 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2015
 * 
 * @class TechModelLignite
 * @brief Class for all lignite type of energy sources.
 */

class TechModelLignite extends TechModel {

  /**
   * @brief Overriden method. Calculates fuel value for all lignite type of energy sources.
   * @return float Value of fuel for lignite source type
   */
  
  public function fuel(){
    $result = LIGNITE_TOE / MWH_TOE / $this->eco_efficiency * LIGNITE_PRICE;
    
    return $result;
  }
  
  
  
  
  
  /**
   * @brief Overriden method. Lignite only: extended land use for the installations and upstream activities (mining) leading to loss of biodiversity and the free services offered by nature. Will be override by children classes since every source has different formula. 
   * @return float Costs of extended land use for lighnite only
   */
  
  public function extendedLandUse(){
    $result = LIGNITE_TOE / MWH_TOE / $this->eco_efficiency / LOCAL_DENSITY_LIGNITE * $this->lifetime; // Formula for extended land use for lignite only
    
    return $result;
  }
  
  
  
  
  
  /**
   * @brief Overriden method. Lignite only: ndeed climate change adaptation will be a day-to-day fight that will cost the global economy some %GDP every year and last for more than centuries. Will be override by children classes since every source has different formula.
   * @return float CO2 yearly costs in CAPEX% (vs OPEX%)
   */
  
  public function co2(){
    $result = DISCOUNT_RATE / (1 - pow(1 + DISCOUNT_RATE, -$this->lifetime)); // Formula for CO2 yearly costs for lignite technology
    
    return $result;    
  }
  
  
  
  
  
  /**
   * @brief Overriden method. Lignite only: average CO2 emissions per MWh due to fossil fuel burning and construction works. Will be override by children classes since every source has different formula.
   * @return float Average CO2 emissions per MWh
   */
  
  public function co2Emission(){
    $result = LIGNITE_CO2 / MWH_TOE / $this->eco_efficiency; // Amount of CO2 emissions for lignite only
    
    return $result;
  }
  
}
