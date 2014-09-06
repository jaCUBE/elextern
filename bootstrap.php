<?php

require 'autoloader.php'; // Including autoloader function for automatic loading classes
require 'config.php'; // Config file with database credentials

date_default_timezone_set('Europe/Prague'); // Current time is current time

global $_EX, $_DB; // Creating important global variables

$_EX = new Ex(); // Instance of main class of elextern
$_EX->databaseConnect(); // Connecting to database via main class

$test = new YieldCalculator();
$test->interpolationYield(55, 'day', 'highest');

?>