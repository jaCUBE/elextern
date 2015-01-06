<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ex
 *
 * @author jaCUBE
 */
class Ex {
  
    public function databaseConnect(){
      global $_DB;

      try {  // Připojení k databázi pomocí PDO
        $_DB = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD); // Připojení s konstantami z Wordpressu
        $_DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $_DB->query('SET NAMES utf8'); // Česká diakritika. Husa upálili příliš pozdě... :)
      }catch(PDOException $e) {  
          echo $e->getMessage(); // Něco se nepodařilo? 
      }
    }
    
    
    public function htmlUnit($unit){
      $unit = str_replace('EUR', '€', $unit);
      $unit = str_replace('^2', '<sup>2</sup>', $unit);
      
      $output = '<div class="unit">'.$unit.'</div>';
      
      
      return $output;
    }
    
    
    public function cloneObject($object, $class)
    {
         $new = new $class();
         foreach ($object as $key => $value)
         {
              $new->$key = $value;
         }
         
         $new->__construct();
         
         return $new;
    }
    
    
    public function countComment(){
      global $_DB;
      
      $sql = '
        SELECT COUNT(*) AS comment_count
        FROM comments
        WHERE visible = 1';
      
      $STH = $_DB->prepare($sql);
      $STH->execute();
      
      $res = $STH->fetch();
      
      return $res['comment_count'];
    }
    
}
