<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserForm
 *
 * @author jaCUBE
 */

class UserForm {
  public $password_hash;
  public $password_hash_cookie;
  public $password_plain;
  
  public function __construct() {
    $this->password_hash_cookie = @$_COOKIE['password'];
    $this->password_plain = @$_POST['password'];
  }
  
  
  public function checkPassword($hash = ''){    
    if(password_verify($this->password_plain, $this->password_hash)){
      return true;
    }
    
    if($this->password_hash === $this->password_hash_cookie){
      return true;
    }
    
    return false;
  }
  
  
  
  
  public function checkEmail(){
    global $_DB;
    
    if(empty($_POST['email'])){
      return false;
    }
    
    $sql = '
      SELECT COUNT(*) AS email_count
      FROM ex_user
      WHERE email = :email';
    
    $STH = $_DB->prepare($sql);
    $STH->bindParam(':email', $_POST['email']);
    $STH->setFetchMode(PDO::FETCH_OBJ);
    $STH->execute();
    
    $obj = $STH->fetch();
    
    if($obj->email_count == 0){
      return true;
    }else{
      return false;
    }
  }
  
  
  
  public function insertSignup(){
    global $_DB;
    
    $this->password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT, Array('cost' => 10));
    
    $sql = '
      INSERT INTO ex_user(
        email,
        password,
        name,
        org,
        reason)
      VALUES(
        :email,
        :password,
        :name,
        :org,
        :reason)';
    
    $STH = $_DB->prepare($sql);
    
    $STH->bindParam(':email', $_POST['email']);
    $STH->bindParam(':password', $this->password_hash);
    $STH->bindParam(':name', $_POST['name']);
    $STH->bindParam(':org', $_POST['org']);
    $STH->bindParam(':reason', $_POST['reason']);
    
    $STH->execute();
    
    $this->setLoginCookie($_POST['email'], $this->password_hash);
  }
  
  
  
  public function setLoginCookie($email, $password_hash){
    setcookie('email', $email, time() + 365 * 24 * 60 * 60);
    setcookie('password', $password_hash, time() + 365 * 24 * 60 * 60); 
  }
  
  
  
  public function loginUser(){
    global $_EX, $_DB;
    
    if(!empty($_COOKIE['email'])){
      $_POST['email'] = $_COOKIE['email'];
    }
    
    $sql = '
      SELECT *
      FROM ex_user
      WHERE email = :email';
    
    $STH = $_DB->prepare($sql);
    $STH->bindParam(':email', $_POST['email']);
    $STH->setFetchMode(PDO::FETCH_CLASS, 'User');
    $STH->execute();

    $user = $STH->fetch();



    if(empty($user)){
      $_EX->logged = 'Sorry, it seems this account doesn\'t exist.';
      return false;
    }

    $this->password_hash = $user->password;

    if(!$this->checkPassword()){
      $_EX->logged = 'Sorry, this account exist but inserted password is incorrect.';
      return false;
    }
            
    $_EX->logged = $user; 
    
    $this->setLoginCookie($user->email, $user->password);
  }
}
