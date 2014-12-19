<?php require 'bootstrap.php';

$main = new TechList();



$cols = Array(
  Array('id' => "", 'label' => 'Energy Type', 'pattern' => "", 'type' => 'string'), 
  Array('id' => "", 'label' => 'Fuel', 'pattern' => "", 'type' => 'number'), 
  Array('id' => "", 'label' => 'Actual CAPEX', 'pattern' => "", 'type' => 'number'), 
  Array('id' => "", 'label' => 'Actual OPEX', 'pattern' => "", 'type' => 'number'),   
  Array('id' => "", 'label' => 'Environtmental Impact', 'pattern' => "", 'type' => 'number'),
  Array('id' => "", 'label' => 'Local Economic Impact', 'pattern' => "", 'type' => 'number'), 
  Array('id' => "", 'label' => 'Social Impact', 'pattern' => "", 'type' => 'number'),   
  Array('id' => "", 'label' => 'Longterm Impact', 'pattern' => "", 'type' => 'number')
); 




foreach($main->tech as $energy){
  $row_temp = Array();
  $row_temp[] = Array('v' => $energy->technology, 'f' => NULL);
  $row_temp[] = Array('v' => round($energy->fuel(), 2), 'f' => NULL);
  $row_temp[] = Array('v' => round($energy->capexActual(), 2), 'f' => NULL);
  $row_temp[] = Array('v' => round($energy->opexActual(), 2), 'f' => NULL);
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


/*


{
  "cols": [
        {"id":"","label":"Topping","pattern":"","type":"string"},
        {"id":"","label":"Slices","pattern":"","type":"number"},
        {"id":"","label":"Slices2","pattern":"","type":"number"},
      ],
  "rows": [
        {"c":[{"v":"Mushrooms","f":null},{"v":3,"f":null},{"v":5,"f":null}]},
        {"c":[{"v":"Onions","f":null},{"v":1,"f":null}]},
        {"c":[{"v":"Olives","f":null},{"v":1,"f":null}]},
        {"c":[{"v":"Zucchini","f":null},{"v":1,"f":null}]},
        {"c":[{"v":"Pepperoni","f":null},{"v":2,"f":null}]}
      ]
}

*/ ?>
