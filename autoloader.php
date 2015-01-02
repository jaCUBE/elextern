<?php

/**
 * @brief Autoloader class which provides including classes in "models" folder separated to distinct type folders.
 * @param string $class_name Name of class to autoload declaration
 * @return void
 */

function exAutoload($class_name) {    
  $path = 'models/'; // Default way to class folder

  $folders = Array(
    'Data',
    'Energy',
    'Item',
    'Source',
    'Yield'); // Category of classes (each category has its own folder inside default folder)

  foreach($folders as $folder){ // Walking through categories...
    if(strpos($class_name, $folder) === 0){ // Checking if parameter includes name of category...
      $path .= $folder.'/'; // ...if it includes, name of category is added on the end of the way
    }
  }

  @include $path.$class_name.'.class.php'; // Including whole way with or without category and class name
}

spl_autoload_register('exAutoload'); // Register this function as autoloading function

?>