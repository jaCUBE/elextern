<?php

$main = new TechManager();

$output = Array();

foreach($main->tech_all as $tech){
  if(strpos($tech->model, 'Nuclear')){
    $output['implicit_nuclear_fuel_price'] = 'Implicit nuclear fuel price: '.round($tech->fuel(), 2).' €/MWh.';
    $output['implicit_nuclear_waste_price'] = 'Implicit nuclear waste price: '.round($tech->impactLongtermNuclearWasteTreatment(), 2).' €/MWh.';
    break;
  } 
}

$output['implicit_co2_price'] = 'Implicit CO<sub>2</sub> price: '.round(LT_CO2_EMISSION, 2).' €/tCO<sub>2</sub>.';
$output['implicit_land_price'] = 'Implicit land price: '.round(ENV_LAND_CONFLICT, 1).' €/m<sup>2</sup>/yr.';



echo json_encode($output);



?>
