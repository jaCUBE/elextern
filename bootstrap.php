<?php

require __DIR__.'/autoloader.php'; // Including autoloader function for automatic loading classes
require __DIR__.'/config.php'; // Config file with database credentials and other important stuff

date_default_timezone_set('Europe/Prague'); // Current time is current time

global $_EX; // Global: main class with helping methods and connecting to db
global $_DB; // Global: variable stores PDO connection to db
global $_YIELD_CALC;


$_EX = new Ex(); // Instance of main class of elextern
$_EX->databaseConnect(); // Connecting to database via main class
$_YIELD_CALC = new YieldCalculator();


$data = new DataManager();
$data->fetchDefaultValue();
$data->processData();

?>