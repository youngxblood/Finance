<?php

$cookie_name = 'loggedin';
if (isset($_COOKIE[$cookie_name])) {
  $cookie_value = $_COOKIE[$cookie_name];
  echo "Welcome to your personal area!<br>";
  echo '<a href="logout.php">Logout</a>';
} else {
  echo "You are not logged in.";
}
