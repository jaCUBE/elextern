<?php require 'bootstrap.php';

$main = new TechList();



$cols = Array(
  Array('id' => "", 'label' => 'Energy Type', 'pattern' => "", 'type' => 'string'), 
  Array('id' => "", 'label' => 'CAPEX', 'pattern' => "", 'type' => 'number'), 
  Array('id' => "", 'label' => 'OPEX', 'pattern' => "", 'type' => 'number'), 
  Array('id' => "", 'label' => 'Fuel', 'pattern' => "", 'type' => 'number'),   
  Array('id' => "", 'label' => 'Environtmental Impact', 'pattern' => "", 'type' => 'number'),
  Array('id' => "", 'label' => 'Economic Impact', 'pattern' => "", 'type' => 'number'), 
  Array('id' => "", 'label' => 'Social Impact', 'pattern' => "", 'type' => 'number'),   
  Array('id' => "", 'label' => 'Longterm Impact', 'pattern' => "", 'type' => 'number')
); 




foreach($main->tech as $energy){
  $row_temp = Array();
  $row_temp[] = Array('v' => $energy->technology, 'f' => NULL);
  $row_temp[] = Array('v' => round($energy->capexActual(), 2), 'f' => NULL);
  $row_temp[] = Array('v' => round($energy->opexActual(), 2), 'f' => NULL);
  $row_temp[] = Array('v' => round($energy->fuel(), 2), 'f' => NULL);
  $row_temp[] = Array('v' => round($energy->impactEnvironment(), 2), 'f' => NULL); 
  $row_temp[] = Array('v' => round($energy->impactEconomic(), 2), 'f' => NULL); 
  $row_temp[] = Array('v' => round($energy->impactSocial(), 2), 'f' => NULL);       
  $row_temp[] = Array('v' => round($energy->impactLongTerm(), 2), 'f' => NULL); 
  $rows[] = Array('c' => $row_temp); 
}
      
      
$table = Array();
$table['cols'] = $cols;
$table['rows'] = $rows;

echo json_encode($table, JSON_NUMERIC_CHECK); 

?>
