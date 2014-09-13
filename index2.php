<?php

require 'bootstrap.php';

$test = new EnergyLigniteIGCC();

echo LT_CO2_EMISSION.'<br />';

echo $test->co2();

?>