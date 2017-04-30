<?php
$pagetitle = 'Personal';
include($_SERVER['DOCUMENT_ROOT']."/view/layout/header.php");
?>





<?php
$cookie_name = 'loggedin';
if (isset($_COOKIE[$cookie_name])) {
  $cookie_value = $_COOKIE[$cookie_name];
  echo "Welcome to your personal area!<br>";
  echo '<a href="http://doshdata.com/model/logout.php">Logout</a>';
} else {
  echo "You are not logged in.";
}
?>

<?php
require_once($_SERVER['DOCUMENT_ROOT']."/inc/connect.php");
if(isset($_COOKIE['loggedin'])){
  $email = $_COOKIE['loggedin'];
  $sql = "SELECT username FROM users WHERE email=$email";
  $username = mysqli_query($conn, $sql);
  echo "<br><p>Welcome " . $username . "!";
}
?>




<?php
include($_SERVER['DOCUMENT_ROOT']."/view/layout/footer.php");
?>
