<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'finance';

$conn =  mysqli_connect($servername, $username, $password, $dbname);

if ( $conn->connect_error ) {
  die('Connection failed: ' . $conn->connect_error);
}

// Function called to get all user information
function getUser() {

  $conn =  mysqli_connect('localhost', 'root', '', 'finance');

  if(isset( $_COOKIE[ 'loggedin' ] ) ){
    $email = $_COOKIE[ 'loggedin' ];
    $sql = mysqli_query( $conn, "SELECT * FROM users WHERE email='$email'" );

  //$user becomes an array that holds the different table data types
    $user = mysqli_fetch_assoc($sql);
    mysqli_close($conn);
    return $user;
  }
}
