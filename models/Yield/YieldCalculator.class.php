<?php

/**
 * @package       Elextern
 * @subpackage    Yield   
 * 
 * @author Jakub Rychecký <jakub@rychecky.cz>
 * @copyright Centrum výzkumu Řež s.r.o., © 2014
 * 
 * @class YieldCalculator
 * @brief Class for interpolation of yield. It has ability to interpolate day/year, highest/lowest prices.
 */

class YieldCalculator {
  
  /**
   * @brief List of yield records fetched from database
   * @var YieldRecord $yield_record 
   */
  
  public $yield_record = Array();
  
  
  public $highest;
  
  
  
  
  
  
  
    
  /**
   * @brief Constructor fetches yield records from database on initialization of this class.
   * @return void
   */
  
  public function __construct() {
    $this->fetchYield();
    
    $this->highest = $this->yield_record[100];
  }
  
  
  
  
  
 /**
  * @brief Fetches all yield records from database and saves it into property of this class.
  * @return void
  */
  
  public function fetchYield(){
    global $_DB;
    
    $sql = '
      SELECT *
      FROM yield
      ORDER BY load_factor DESC'; // SQL query for all yield records in db
    
    $STH = $_DB->prepare($sql);
    $STH->setFetchModE(PDO::FETCH_CLASS, 'YieldRecord'); // PDO fetching into class instances
    $STH->execute();
    
    while($obj = $STH->fetch()){ // Walking all YieldRecords from database...
      $this->yield_record[$obj->load_factor] = $obj; // ...saving it into property array with load factor as index of array
    }
  }
  
  
  
  
  
 /**
  * @brief Main method for interpolation of yield.
  * @param float $value Value of load factor to interpolate
  * @param string $time Optional: select "day" or "year" to interpolate
  * @param string $high Optional: select "highest" or "lowest" of prices to interpolate 
  * @return float Interpolated value for the first parameter
  */
  
  public function interpolationYield($value, $time = 'year', $high = 'highest'){
    if($value < 100){
      $value *= 100;
    }
    
    $lower = $this->findLower($value); // Searching for YieldRecord lower than desired value
    $higher = $this->findHigher($value); // Searching for YieldRecord higher than desired value

    if($lower->load_factor == $higher->load_factor){ // If load factors of both are same, it means desired value is in native YieldRecord table
      return $higher->getPrice($time, $high); // Returning desired price of higher (same as lower)
    }
    
    $lower_price = $lower->getPrice($time, $high); // Desired price of lower YieldRecord
    $higher_price = $higher->getPrice($time, $high); // Desired priced of higher YieldRecord

    
    $result = $this->interpolation($lower->load_factor, $higher->load_factor, $lower_price, $higher_price, $value); // Interpolation with values as parameter
    
    return round($result, 2); // Returning rounded interpolated price for desired value
  }
 
  
  
  
  
 /**
  * @brief Method provides linear interpolation for values inside parameter.
  * @param float $x1 The first X value for linear interpolation
  * @param float $x2 The second X value for linear interpolation
  * @param float $y1 The first Y value for linear interpolation
  * @param float $y2 The second Y value for linear interpolation
  * @param float $x The desired value for linear interpolation
  * @return float Interpolated result (Y value) for desired $x value according data in parameter
  */
 
  private function interpolation($x1, $x2, $y1, $y2, $x){
    $result = ($x - $x1) * ($y2 - $y1); // Next three rows is formula for linear interpolation
    $result /= ($x2 - $x1);
    $result += $y1;
    
    return $result; // Returning unrounded result
  }
  
  
  
  
  
 /**
  * @brief Searching yield record which has lower load factor than desired value.
  * @param float $value Desired value
  * @return YieldRecord The first yield record with lower load factor than desired value.
  */
  
  private function findLower($value){
    foreach($this->yield_record as $yield_record){ // Walking through all yield records (descending order 100 .... 50 .... 0)
      if($value >= $yield_record->load_factor){ // The first with lower or same value of load factor...
        return $yield_record; // ...is returned.
      }
    }
  }
  
  
  
  
  
 /**
  * @brief Searching yield record which has higher load factor than desired value.
  * @param float $value Desired value
  * @return YieldRecord The first yield record with higher load factor than desired value.
  */
  
  private function findHigher($value){  
    $yield_record_reversed = array_reverse($this->yield_record); // Reversing array for reaching ascending order
    
    foreach($yield_record_reversed as $yield_record){ // Walking through all yield records (ascending order 0 .... 50 ..... 100)
      if($value <= $yield_record->load_factor){  // The first with higher or same value of load factor...
        return $yield_record; // ...is returned.
      }
    }
  }
  
}
