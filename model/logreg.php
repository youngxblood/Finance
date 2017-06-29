<?php
// Variables
$cookie_name = "loggedin";
$error = false;
require_once( $_SERVER[ 'DOCUMENT_ROOT' ]."/inc/connect.php" ); //DB connection

// Login model
if ( isset( $_POST[ 'login' ] ) ) {

  $pass = mysqli_real_escape_string( $conn, $_POST[ 'password' ] );
  $email = mysqli_real_escape_string( $conn, $_POST[ 'email' ] );
  $phash = sha1(sha1($pass.'salt').'salt');

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$phash';";

  $result = mysqli_query( $conn, $sql );
  $count = mysqli_num_rows( $result );

  if ( $count == 1 ) {
    $sql = "SELECT id
            FROM users
            WHERE email='$email';";
    $result = $conn->query( $sql );
    $id = mysqli_fetch_assoc($result);
    $id = $id['id'];
    $cookie_value = $id;
    setcookie($cookie_name, $cookie_value, time() + (900), "/");
    header('Location: http://doshdata.com/view/personal.php' );
  } else {
    header('Location: http://doshdata.com/view/loginfailed.php');
  }

}

// Register model
else if ( isset( $_POST[ 'register' ] ) ) {

  $user = mysqli_real_escape_string( $conn, $_POST[ 'username' ] );
  $pass = mysqli_real_escape_string( $conn, $_POST[ 'password' ] );
  $email = mysqli_real_escape_string( $conn, $_POST[ 'email' ] );
  $phash = sha1(sha1($pass.'salt').'salt');

  $sql = "SELECT username FROM users WHERE email='$email'";
  $result = mysqli_query( $conn, $sql );
  $count = mysqli_num_rows( $result );

  if ( $count == 1 ) {
    echo "This email is currently in use.";
    $error = true; // Potentially redundant due to the page redirect
    header( 'Location: http://doshdata.com/view/registerfailed.php' );
  }


  if ( $error == false ) {
    $sql = "INSERT INTO users ( id, username, password, email ) VALUES ( '', '$user', '$phash', '$email' );";
    $result = mysqli_query( $conn, $sql );
    $sql = "SELECT id FROM users WHERE email='$email';";
    $id = mysqli_query( $conn, $sql );
    $cookie_value = $id;
    setcookie( $cookie_name, $cookie_value, time() + ( 900 ), "/");
    header( 'Location: http://doshdata.com/view/personal.php' );
  }
}

