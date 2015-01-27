<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommentForm
 *
 * @author jaCUBE
 */
class CommentForm {
  public function insertComment(){
    global $_DB;
    
    if(empty($_POST['comment_text'])){
      return false;
    }
    
    $sql = '
      INSERT INTO ex_comment(
        author_name,
        author_email,
        comment_text,
        reply_id,
        ip,
        user_agent)
      VALUES (
        :author_name,
        :author_email,
        :comment_text,
        :reply_id,
        :ip,
        :user_agent)';    
    
    $STH = $_DB->prepare($sql);
    $STH->bindParam(':author_name', $_POST['author_name']);
    $STH->bindParam(':author_email', $_POST['author_email']);
    $STH->bindParam(':comment_text', $_POST['comment_text']);
    $STH->bindParam(':reply_id', $_POST['reply_id']);
    $STH->bindParam(':ip', $_SERVER['REMOTE_ADDR']);
    $STH->bindParam(':user_agent', $_SERVER['HTTP_USER_AGENT']);
    $STH->execute();
  }
}
