<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommentController
 *
 * @author jaCUBE
 */
class CommentController extends ExController {
  public function __construct() {
    parent::__construct();
  }
  
  /*
  $form = new CommentForm();
  $form->insertComment();*/
  
    
    
  public function standard(){
    global $_EX;
    
    $this->data = new CommentList();
    $this->data->fetchCommentList();
  
    $_EX->view('comment', $this->data);
  }
}
