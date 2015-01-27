<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommentList
 *
 * @author jaCUBE
 */
class CommentList {
  public $comment_list = Array();
  
  public function fetchCommentList(){
    global $_DB;
    
    $sql = '
      SELECT *
      FROM ex_comment
      WHERE visible = 1
      ORDER BY added DESC';
    
    $STH = $_DB->prepare($sql);
    $STH->setFetchMode(PDO::FETCH_CLASS, 'Comment');
    $STH->execute();
    
    while($obj = $STH->fetch()){
      $this->comment_list[] = $obj;
    }
  }
}
