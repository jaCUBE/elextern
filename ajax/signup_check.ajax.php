<?php 

if(empty($_POST['email']) OR empty($_POST['name']) OR empty($_POST['password'])){ // Are all required data filled?
  ob_start(); ?>

    <button type="submit" class="btn btn-default disabled">
      Sign up
    </button>
<?php 
  echo ob_get_clean();
  exit;
}


$user_form = new UserForm();


if($user_form->checkEmail()){
  ob_start(); ?>
    <button type="submit" class="btn btn-default" onclick="$('#signup-form').submit();">
      Sign up
    </button>
  <?php echo ob_get_clean();
}else{
  ob_start(); ?>
    <div class="signup-error">
      We are sorry, this e-mail is already used.
    </div>
  <?php echo ob_get_clean();
}


?>