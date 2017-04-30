<?php
$pagetitle = 'Login';
include($_SERVER['DOCUMENT_ROOT']."/view/layout/header.php");
?>


<div class="container">
  <div class="col-lg-6 col-lg-offset-2 back">
    <h2>Enter your login information below:</h2>
    <form action="http://doshdata.com/model/logreg.php" method="post" accept-charset="utf-8">
    <label>Email: </label><input class="form-control" type="Email" name="email" placeholder="myemail@email.com"><br>
      <label>Password: </label><input class="form-control" type="Password" name="password"><br>
      <input class="btn btn-success" id="all-pad5" type="submit" name="login" value="Login">
    </form>
  </div>
</div>

<?php
include($_SERVER['DOCUMENT_ROOT']."/view/layout/footer.php");
?>
