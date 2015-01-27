<?php

require 'bootstrap.php';

$path = 'ajax/'.$_GET['action'].'.ajax.php';

include $path;

?>