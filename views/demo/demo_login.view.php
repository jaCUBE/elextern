<form action="index.php" method="post" id="login-form" style="display: none;">
  <input type="hidden" name="ex_form" value="login" />

  <table>
    <tr>
      
      <td>
        <label for="email">E-mail:</label>
        <input type="text" name="email" class="form-control" placeholder="i.e.: frederic@mysite.com" />
      </td>
      
      <td>
        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control" placeholder="Sssh, your password..." />
      </td>

      <td class="center">
        <button type="submit" class="btn btn-default">
          Log in
        </button>
      </td>
    </tr>
  </table>
</form>