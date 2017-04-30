<?php

$cookie_name = "loggedin";
$error = false;
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'finance';



$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Database connection failed!: ".mysqli_connect_error());
}


if (isset($_POST['login'])) {

  // $user = mysqli_real_escape_string($conn, $_POST['username']);
  $pass = mysqli_real_escape_string($conn, $_POST['password']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phash = sha1(sha1($pass.'salt').'salt');

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$phash';";

  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);

  if ($count == 1) {
    $cookie_value = $email;
    setcookie($cookie_name, $cookie_value, time() + (180), "/");
    header('Location: http://doshdata.com/view/personal.php' );
  } else {
    echo "Username or password is incorrect.";
  }

}

else if (isset($_POST['register'])) {

  $user = mysqli_real_escape_string($conn, $_POST['username']);
  $pass = mysqli_real_escape_string($conn, $_POST['password']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phash = sha1(sha1($pass.'salt').'salt');

  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);

  if ( $count == 1 ) {
    echo "This email is currently in use.";
    $error = true;
  }


  if ($error == false) {
    $sql = "INSERT INTO users (id, username, password, email) VALUES ('', '$user', '$phash', '$email');";

  $result = mysqli_query($conn, $sql);
}
}
