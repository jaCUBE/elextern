<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemManager
 *
 * @author jaCUBE
 */

class ItemManager {
  public $item_list = Array();
  
  
  
  public function fetchItemList(){
    global $_DB;
    
    $sql = '
      SELECT *
      FROM ex_item';
    
    $STH = $_DB->prepare($sql);
    $STH->setFetchMode(PDO::FETCH_CLASS, 'Item');
    $STH->execute();
    
    while($obj = $STH->fetch()){
      $this->item_list[$obj->item_id] = $obj;
    }
  }
  
  
  
  public function html($id, $position = 'bottom'){
    if(!empty($this->item_list[$id])){
      echo $this->item_list[$id]->htmlPopover($position);
    }
  }
  
  
  public function htmlIcon($id, $position = 'bottom'){
    echo '<i class="fa fa-info help" ';
    echo $this->html($id, $position);
    echo '></i>';
  }
  
  
  
}
