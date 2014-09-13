<?php

require 'bootstrap.php';

$test = new TestTable();

?>

<table class="test">
  <thead>
    <?php echo $test->tableHeader(); ?>
  </thead>
  
  <tbody>
    <?php 
    echo $test->walkProperty('Region', 'country_code');
    echo $test->walkProperty('Efficience', 'eco_efficiency');
    echo $test->walkProperty('Dispatchable source?', 'dispatchable');
    echo $test->walkProperty('Fossil fuel?', 'eco_fossil_fuel');
    echo $test->walkProperty('Construction time?', 'construction_time');
    echo $test->walkProperty('CAPEX', 'capex');
    echo $test->walkProperty('Lifetime', 'lifetime');
    echo $test->walkProperty('Grid connection', 'grid_connection');
    echo $test->walkMethod('CAPEX IDR', 'capexIDR');
    echo $test->walkProperty('Share of foreign purchases', 'eco_foreign_purchases');
    echo $test->walkProperty('Operation (OPEX% = % of CAPEX)', 'opex');
    echo $test->walkMethod('Fuel', 'fuel');
    echo $test->walkMethod('Nuclear Fuel Post-Treatment', 'nuclearFuelPostTreatment');
    echo $test->walkMethod('Actual CAPEX', 'capexActual');
    echo $test->walkMethod('Actual OPEX', 'opexActual');
    echo $test->walkMethod('LCOE', 'lcoe');
    echo $test->walkMethod('Flexibility Yield', 'yieldFlexibility');
    echo $test->walkMethod('<strong>NET COST</strong>', 'costNet');
    echo $test->walkMethod('<em>Economic impact</em>', 'impactEconomic');
    echo $test->walkMethod('<em>Social impact</em>', 'impactSocial');
    echo $test->walkMethod('<em>Environmental impact</em>', 'impactEnvirontment');
    echo $test->walkMethod('<em>Longterm</em>', 'impactLongterm');
    echo $test->walkMethod('<strong>EXTERNALITIES COST</strong>', 'costExternality');
    echo $test->walkMethod('<strong>TOTAL REFERENCE VALUE</strong>', 'costReference');
    echo '<tr></tr><tr></tr>';
    echo $test->walkMethod('CO2 emissions', 'co2Emission');
    echo $test->walkMethod('Decomissioning actual', 'decomissioningActual');
    echo $test->walkMethod('Technology import', 'techImport');
    echo $test->walkMethod('Nuclear waste treatment', 'nuclearFuelPostTreatment');
    echo $test->walkMethod('Displaced People', 'displacedPeople');
    echo $test->walkMethod('Extended land use', 'extendedLandUse');
    ?>
  </tbody>
  
</table>