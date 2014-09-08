<?php

require 'bootstrap.php';
require 'html_header.php';

?>



<?php 

$test = new TestTable();



/*
echo 'Capex IDR:'.$test->capexIDR().'<br />';
echo 'CAPEX actual:'.$test->capexActual().'<br />';
echo 'OPEX actual:'.$test->opexActual().'<br />';
echo 'Coal depletion:'.$test->coalDepletion().'<br />';
echo 'Gas import:'.$test->gasImport().'<br />';
echo 'Fuel:'.$test->fuel().'<br />';
echo 'LCOE:'.$test->lcoe().'<br />';
echo 'Flexibility Yield:'.$test->yieldFlexibility().'<br />';
echo 'Net cost:'.$test->netCost().'<br />';
echo 'CO2 yearly costy (CAPEX% vs OPEX%):'.$test->yearlyCo2Cost().'<br />';
echo 'Energy produced:'.$test->energyProduced().'<br />';

echo '<hr />Co2 yearly costs:'.$_IN_IMPACT->costCo2().'<br />';
echo '<hr />CO2 implicit price:'.$_IN_IMPACT->implicitCo2Price().'<br />';*/

?>

<table class="test">
  <thead>
    <?php echo $test->tableHeader(); ?>
  </thead>
  
  <tbody>
    <?php 
    echo $test->walkProperty('Region', 'country_code');
    echo $test->walkProperty('Efficience', 'efficiency');
    echo $test->walkProperty('Dispatchable source?', 'dispatchability');
    echo $test->walkProperty('Fossil fuel?', 'fossil_fuel');
    echo $test->walkProperty('Construction time?', 'construction_time');
    echo $test->walkProperty('CAPEX', 'capex');
    echo $test->walkProperty('lifetime', 'lifetime');
    echo $test->walkMethod('CAPEX IDR', 'capexIDR');
    echo $test->walkProperty('Share of foreign purchases', 'foreign_purchases');
    echo $test->walkProperty('Grid connection', 'grid_connection');
    echo $test->walkProperty('Operation (OPEX% = % of CAPEX)', 'opex');
    echo $test->walkMethod('Fuel', 'fuel');
    echo $test->walkMethod('Actual CAPEX', 'capexActual');
    echo $test->walkMethod('Actual OPEX', 'opexActual');
    echo $test->walkMethod('LCOE', 'lcoe');
    echo $test->walkMethod('Flexibility Yield', 'yieldFlexibility');
    echo $test->walkMethod('Net Cost', 'netCost');
    ?>
  </tbody>
  
</table>