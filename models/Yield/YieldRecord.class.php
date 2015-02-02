<?php

/**
 * @package       Elextern
 * @subpackage    Yield   
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2015
 * 
 * @class YieldRecord
 * @brief One yield record of yield table inside database.
 */

class YieldRecord {
  
  /**
   * @brief Record ID
   * @var integer $row_id
   */  
  public $row_id;
  
  /**
   * @brief Load factor of this yield record
   * @var float $load_factor
   */ 
  public $load_factor;
  
  /**
   * @brief Highest year price for this yield record with this load_factor
   * @var float $highest_price_y
   */ 
  public $highest_price_y;
  
  /**
   * @brief Lowest year price for this yield record with this load_factor
   * @var float $lowest_price_y
   */ 
  public $lowest_price_y;
  
  /**
   * @brief Highest day price for this yield record with this load_factor
   * @var float $highest_price_d
   */ 
  public $highest_price_d;
  
  /**
   * @brief Lowest day price for this yield record with this load_factor
   * @var float $lowest_price_d
   */ 
  public $lowest_price_d;
  
  
  
  
  
  
  
  
  
  
  
 /**
  * @brief Method returns price of this yield record according to values in parameter.
  * @param string $time Optional: select "day" or "year" price
  * @param string $high Optional: select "highest" or "lowest" price
  * @return float Desired price
  */
  
  public function getPrice($time = 'day', $high = 'highest'){
    $var_name = $high.'_price_'.$time[0]; // Generating name of property which will be returned
    return $this->$var_name; // Returning property with generated name
  }
  
  
}
