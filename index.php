<?php

require 'bootstrap.php';
require 'html_header.php';

$test = new TestTable();

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
    echo $test->walkProperty('Lifetime', 'lifetime');
    echo $test->walkProperty('Grid connection', 'grid_connection');
    echo $test->walkMethod('CAPEX IDR', 'capexIDR');
    echo $test->walkProperty('Share of foreign purchases', 'foreign_purchases');
    echo $test->walkProperty('Operation (OPEX% = % of CAPEX)', 'opex');
    echo $test->walkMethod('Fuel', 'fuel');
    echo $test->walkMethod('Nuclear Fuel Post-Treatment', 'nuclearFuelPostTreatment');
    echo $test->walkMethod('Actual CAPEX', 'capexActual');
    echo $test->walkMethod('Actual OPEX', 'opexActual');
    echo $test->walkMethod('LCOE', 'lcoe');
    echo $test->walkMethod('Flexibility Yield', 'yieldFlexibility');
    echo $test->walkMethod('<strong>NET COST</strong>', 'costNet');
    echo $test->walkMethod('<em>Environmental impact</em>', 'impactEnvirontmental');
    echo $test->walkMethod('<em>Economic impact</em>', 'impactEconomic');
    echo $test->walkMethod('<em>Social impact</em>', 'impactSocial');
    echo $test->walkMethod('Climate change', 'climateChange');
    echo $test->walkMethod('<strong>EXTERNALITIES COST</strong>', 'costExternality');
    echo $test->walkMethod('<strong>TOTAL REFERENCE VALUE</strong>', 'costTotal');
    ?>
  </tbody>
  
</table>


<table class="test">
  <thead>
    <?php echo $test->tableHeader(); ?>
  </thead>
  
  <tbody>
    <?php 
    echo $test->walkMethod('Decomissioning actual', 'decomissioningActual');
    echo $test->walkMethod('Tech imports', 'techImport');
    echo $test->walkMethod('Conflict of use', 'conflictOfUse');
    echo $test->walkMethod('Displaced people', 'displacedPeople');
    echo $test->walkMethod('Coal depletion', 'coalDepletion');
    echo $test->walkMethod('CO2: CAPEX% vs OPEX%', 'capexOpex');
    echo $test->walkMethod('CO2eq emissions', 'co2Emission');
    echo $test->walkProperty('Respiratory diseases', 'health_respiratory');
    echo $test->walkProperty('Cancer', 'health_cancer');
    echo $test->walkProperty('Mortality', 'health_mortality');
    ?>
  </tbody>
  
</table>
