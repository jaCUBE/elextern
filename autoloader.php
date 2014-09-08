<?php

function exAutoload($class_name) {    
  $path = 'models/'; // Defaultní složka s modely

  $folders = Array(
    'Data',
    'Energy',
    'Yield');

  foreach($folders as $folder){
    if(strpos($class_name, $folder) === 0)
    $path .= $folder.'/';
  }

  @include $path.$class_name.'.class.php';
}

spl_autoload_register('exAutoload'); 

?>