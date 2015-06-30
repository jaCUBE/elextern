<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Item
 *
 * @author jaCUBE
 */
class Item {
  
  public $row_id;
  public $item_id;
  public $name;
  public $name_short;
  public $description;
  public $unit;
  public $icon;
  public $note;
  public $added;
  public $timestamp;
  
  
  
  
  
  
  
  
  
  
  public function htmlPopover($position = 'bottom'){
    ob_start(); ?>


    data-container="body" data-placement="<?php echo $position; ?>" data-original-title="<?php echo $this->name(); ?>" data-content="<?php echo $this->description; ?>"

      
    <?php return ob_get_clean();
  }
  
  
  
  
  public function name(){
    if(empty($this->name)){
      return 'EMPTY, item_id: '.$this->item_id;
    }
    

    if(!empty($this->name_short)){
      return $this->name.' ('.$this->name_short.')';
    }
    
    return $this->name;
  }
  
  
}
