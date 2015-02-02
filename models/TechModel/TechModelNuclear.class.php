<?php

/**
 * @package       Elextern
 * @subpackage    TechModel 
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2015
 * 
 * @class TechModelNuclear
 * @brief Class for all nuclear type of energy sources.
 */

class TechModelNuclear extends TechModel {
  
  /**
   * @brief Constructor calls parent's constructor.
   * @return void
   */
  
  public function __construct() {
    parent::__construct();
  }
  
  
  
  
  
  /**
   * @brief Overriden method. Calculating fuel price for nuclear types of sources.
   * @return float Costs of fuel for nuclear technologies
   */
  
  public function fuel(){
    return 7 * 0.68;
  }
  
  
  
  
  
  /**
   * @brief Overriden method. Specific calculation of extended land use for nuclear sources.
   * @return float Costs of extended land use
   */
  
  public function extendedLandUse() {
    $result = pow(NUCLEAR_EXCLUSION, 2) * pi() / NUCLEAR_ACCIDENT * TIME_HORIZON; // Formula counting extended land use for nucleat based on time horizon, nuclear accidents
    
    return $result;    
  }
  
  
  
  
  
  /**
   * @brief Overriden method. Specific calculation of costs of displaced peopler for nuclear technologies.
   * @return float Costs of displaced people
   */
  
  public function displacedPeople() {
    $result = pow(NUCLEAR_EXCLUSION, 2) * pi() / NUCLEAR_ACCIDENT * LOCAL_DENSITY_POPULATION / 1000000; // Formula based on population density and nuclear accidents

    return $result;    
  }
  
  
  
  
  
  /**
   * @brief Overriden method. Nuclear types only have this part of longterm impact: nuclear waste treatment.
   * @return float Costs of nuclear waste treatment [%/pre-treatment]
   */

  public function impactLongtermNuclearWasteTreatment() {    
    $result_one = $this->fuel() * LT_NUCLEAR_WASTE_TREATMENT;
    $result_two = 1 - pow(1 + DISCOUNT_RATE, -TIME_HORIZON);
    $result = $result_one * $result_two / DISCOUNT_RATE; // Formula for calculating nuclear waste treatment
    
    return $result;
  }
  
}
