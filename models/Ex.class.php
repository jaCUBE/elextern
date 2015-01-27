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
        FROM ex_comment
        WHERE visible = 1';
      
      $STH = $_DB->prepare($sql);
      $STH->execute();
      
      $res = $STH->fetch();
      
      return $res['comment_count'];
    }
    
    
  /**
   * Řetězec v parametru připraví do formátu názvu CSS třídy.
   * 
   * @param string $string Vstup k přípravě na CSS třídu.
   * 
   * @return string Formátovaný řetězec na CSS třídu.
   */ 
  
  public function makeCssName($string){    
    $original = Array('/', ' ', '(', ')', ',', '[', ']', '_', '%');
    $replace  = Array('-', '-', '-', '-', '', '-', '', '-', '');
    
    $string = str_replace($original, $replace, $string);
    
    $string = strtolower($string);
    
    return $string;   
  }  
  
  
  public function isLogged(){
    if(@$_COOKIE['login'] == 'test'){
      return true;
    }
    
    return false;
  }
  
  
  
  public function view($view_name, $data = false, $data2 = false, $data3 = false){
    $path = 'views/'; // Základní cesta

    $view_folder = Array(
      'admin',
      'chart',  
      'comment',
      'contact',
      'demo',
      'form',
      'login',
      'source',
      'table'); // Seznam zvláštních složek views

    foreach($view_folder as $view_folder_one){ // Procházení všech zvláštních složek
      if(strpos($view_name, $view_folder_one) === 0){ // Pokud název pohledu začíná názvem zvláštní složky...
        $path .= $view_folder_one.'/'; // Přidání zvláštní složky k cestě
      }
    }

    $div_name = str_replace('_', '-', $view_name); // Převedení jména pohledu na ID divu (podtržítko -> pomlčka)

    
    echo '<div id="'.$div_name.'">'; // Pohled se zobrazuje v div s ID shodném s názvem pohledu
    @include $path.$view_name.'.view.php'; // Vykreslení template dle argumentu  
    echo '</div>';
    
    flush(); // Vyprázdnění bufferu s každým pohledem
  }
  
  
    
}
