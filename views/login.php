<div class="row">
  
  <div class="col-md-1">
    
  </div>
  
  <div class="col-md-4">
    <h2 class="elextern">
      Sign Up
    </h2>
    <form action="index.php" method="post">
      <input type="hidden" name="ex_form" value="signup" />
      
      <label for="email">E-mail:</label>
      <input type="text" name="email" class="form-control" placeholder="i.e.: frederic@mysite.com" />
      
      <label for="password">Password:</label> 
      <input type="password" name="password" class="form-control" />
      
      <label for="institution">Name:</label>
      <input type="text" name="email" class="form-control" placeholder="i.e.: Randall Smith" />
      
      <label for="name">Institution:</label>
      <input type="text" name="institution" class="form-control" placeholder="i.e.: Technical University of Everything" />
      
      <label for="reason">Tell us what do you expect from ELEXTERN please:</label>
      <textarea class="form-control" id="reason" name="reason"></textarea>
      
      <br />
      
      <div class="center">
        <button type="submit" class="btn btn-primary btn-lg">
          Sign me up
        </button>
      </div>
      
    </form>
  </div>
  
  
  <div class="col-md-2">
    
  </div>
  

  <div class="col-md-4">
    <h2 class="elextern">
      Login
    </h2>
    <form action="index.php" method="post">
      <input type="hidden" name="ex_form" value="login" />
      
      <label for="email">E-mail:</label>
      <input type="text" name="email" class="form-control" placeholder="i.e.: frederic@mysite.com" />
      
      <label for="password">Password:</label>
      <input type="password" name="password" class="form-control" />
      
      <br />
      
      <div class="center">
        <button type="submit" class="btn btn-default">
          Log me in
        </button>
      </div>
    </form>
  </div>
  
  <div class="col-md-1">
    
  </div>
  
  
</div>