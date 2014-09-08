<?php

require 'autoloader.php'; // Including autoloader function for automatic loading classes
require 'config.php'; // Config file with database credentials

date_default_timezone_set('Europe/Prague'); // Current time is current time

global $_EX;
global $_DB;
global $_IN_COST;
global $_IN_IMPACT;
global $_DATA_GLOBAL;
global $_DATA_LOCAL; // Creating important global variables
global $_YIELD_CALC;

$_EX = new Ex(); // Instance of main class of elextern
$_EX->databaseConnect(); // Connecting to database via main class




$_IN_COST = new DataInputCost();
$_IN_IMPACT = new DataInputImpact();
$_DATA_GLOBAL = new DataGlobal();
$_DATA_LOCAL = new DataLocal();
$_YIELD_CALC = new YieldCalculator();

?>