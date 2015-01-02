<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Source
 *
 * @author jaCUBE
 */
class Source {
  public $source_id;
  public $show_order;
  public $name;
  public $magazine;
  public $author;
  public $url;
  public $note;
  public $visible;
  public $added;
  public $timestamp;
  
  
  public function host(){
    $url_parsed = parse_url($this->url);
    return $url_parsed['host'];
  }
}
