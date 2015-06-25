<?php

/**
 * @brief Autoloader class which provides including classes in "models" folder separated to distinct type folders.
 * @param string $class_name Name of class to autoload declaration
 * @return boolean Always true, lol
 */

function exAutoload($class_name) {  
  if(strpos($class_name, 'Controller')){
    @include 'controllers/'.$class_name.'.class.php'; // Including whole way with or without category and class name
    return true;
  }
  
  $path = 'models/'; // Default way to class folder

  $folders = Array(
    'Comment',
    'Data',
    'Source',
    'TechModel',
    'Tech',
    'User',
    'Yield'); // Category of classes (each category has its own folder inside default folder)

  foreach($folders as $folder){ // Walking through categories...
    if(strpos($class_name, $folder) === 0){ // Checking if parameter includes name of category...
      $path .= $folder.'/'; // ...if it includes, name of category is added on the end of the way
      
      break; // If class folder has been found, ends loop
    }
  }

  @include $path.$class_name.'.class.php'; // Including whole way with or without category and class name
  
  return true;
}

spl_autoload_register('exAutoload'); // Register this function as autoloading function

?>