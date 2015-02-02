<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author jaCUBE
 */
class User {
  
  
  
  
  public function lastVisitPing(){
    global $_EX, $_DB;
    
    $sql = '
      UPDATE ex_user
      SET last_visit = NOW(),
          last_ip    = :ip,
          last_user_agent = :user_agent
      WHERE email = :email';
    
    $STH = $_DB->prepare($sql);
    $STH->bindParam(':ip', $_SERVER['REMOTE_ADDR']);
    $STH->bindParam(':user_agent', $_SERVER['HTTP_USER_AGENT']);
    $STH->bindParam(':email', $_EX->logged->email);
    $STH->execute();
  }
}
