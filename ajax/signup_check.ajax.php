<?php 



if(empty($_POST['email']) OR empty($_POST['name']) OR empty($_POST['password'])){ // Are all required signup data filled?
  ob_start(); ?>

    <button type="submit" class="btn btn-default disabled">
      Sign up
    </button>

  <?php 
  echo ob_get_clean();
  exit;
}





$user_form = new UserForm(); // Instance of object for DB working of users


if($user_form->checkEmail()){ // Is this a unique e-mail (nobody use it so far)?
  ob_start(); ?>
    <button type="submit" class="btn btn-default" onclick="$('#signup-form').submit();">
      Sign up
    </button>
  <?php echo ob_get_clean();
  
}else{ // Error message for already used e-mail address...
  
  ob_start(); ?>
    <div class="signup-error">
      We are sorry, this e-mail is already used.
    </div>
  <?php echo ob_get_clean();
}


?>