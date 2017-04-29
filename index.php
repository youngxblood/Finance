<?php

include 'inc/init.php';
require_once SITE_ROOT . 'INC' .DS. 'header.php';
?>

<div class="container">

  <form action="logreg.php" method="post" accept-charset="utf-8">
      <label>Email: </label><input type="Email" name="email"><br>
    <label>Username: </label><input type="text" name="username"><br>
    <label>Password: </label><input type="Password" name="password"><br>

    <input type="submit" name="login" value="Login">
    <input type="submit" name="register" value="Register">
  </form>

<?php echo($_SERVER['DOCUMENT_ROOT'] . '/finance/css/bootstrap.css'); ?>



</div>






<?php
require_once SITE_ROOT . 'INC' .DS. 'footer.php';
?>
