<?php

$demo_block = Array('table.php', 'comment.php');
$file_current = basename($_SERVER["SCRIPT_NAME"]);







$user_form = new UserForm();

if(@$_POST['ex_form'] == 'signup'){
  $user_form->insertSignup();
}

if(@$_POST['ex_form'] == 'login' OR !empty($_COOKIE['email'])){
  $user_form->loginUser();
}

if($_EX->isLogged() AND $file_current != 'ajax.php'){
  $_EX->logged->lastVisitPing();
}


?>