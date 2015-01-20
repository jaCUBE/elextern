<form action="index.php" method="post">
  <input type="hidden" name="ex_form" value="login" />

  <label for="email">E-mail:</label>
  <input type="text" name="email" class="form-control" placeholder="i.e.: frederic@mysite.com" />

  <label for="password">Password:</label>
  <input type="password" name="password" class="form-control" />

  <br />

  <div class="center">
    <a href="#" class="btn btn-default" onclick="login();">
      Log me in
    </a>
  </div>
</form>