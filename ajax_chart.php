<?php require 'bootstrap.php';

$main = new TechList();



$cols = Array(
  Array('id' => "", 'label' => 'Electricity Technologies', 'pattern' => "", 'type' => 'string'), 
  Array('id' => "", 'label' => 'CAPEX', 'pattern' => "", 'type' => 'number'), 
  Array('id' => "", 'label' => 'OPEX', 'pattern' => "", 'type' => 'number'), 
  Array('id' => "", 'label' => 'Fuel', 'pattern' => "", 'type' => 'number'),   
  Array('id' => "", 'label' => 'Economic Impact', 'pattern' => "", 'type' => 'number'), 
  Array('id' => "", 'label' => 'Social Impact', 'pattern' => "", 'type' => 'number'),   
  Array('id' => "", 'label' => 'Environtmental Impact', 'pattern' => "", 'type' => 'number'),
  Array('id' => "", 'label' => 'Long-term Impact', 'pattern' => "", 'type' => 'number')
); 




foreach($main->tech as $energy){
  if(SHOW_CAPEX){
    $capex = $energy->capexActual();
  }else{
    $capex = 0;
  }
  
  if(SHOW_OPEX){
    $opex = $energy->opexActual();
  }else{
    $opex = 0;
  }
  
  if(SHOW_FUEL){
    $fuel = $energy->fuel();
  }else{
    $fuel = 0;
  }
  
  if(SHOW_IMPACT_ECONOMIC){
    $impact_economic = $energy->impactEconomic();
  }else{
    $impact_economic = 0;
  }
  
  $row_temp = Array();
  $row_temp[] = Array('v' => $energy->technology, 'f' => NULL);
  $row_temp[] = Array('v' => round($capex, 2), 'f' => NULL);
  $row_temp[] = Array('v' => round($opex, 2), 'f' => NULL);
  $row_temp[] = Array('v' => round($fuel, 2), 'f' => NULL);
  $row_temp[] = Array('v' => round($impact_economic, 2), 'f' => NULL); 
  $row_temp[] = Array('v' => round($energy->impactSocial(), 2), 'f' => NULL); 
  $row_temp[] = Array('v' => round($energy->impactEnvironment(), 2), 'f' => NULL);       
  $row_temp[] = Array('v' => round($energy->impactLongTerm(), 2), 'f' => NULL); 
  $rows[] = Array('c' => $row_temp); 
}
      
      
$table = Array();
$table['cols'] = $cols;
$table['rows'] = $rows;

echo json_encode($table, JSON_NUMERIC_CHECK); 

?>
