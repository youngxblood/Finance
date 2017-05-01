<?php

$pagetitle = 'Personal';
include( $_SERVER[ 'DOCUMENT_ROOT' ]."/view/layout/header.php" );
require_once( $_SERVER[ 'DOCUMENT_ROOT' ]."/inc/connect.php" );
$user = getUser();

$cookie_name = 'loggedin';
if ( isset( $_COOKIE[ $cookie_name ] ) ) {
  $cookie_value = $_COOKIE[ $cookie_name ];
} else {

  echo "You are not logged in.";
}
?>

<?php



?>


<?php
if ( isset( $user[ 'username' ] ) ) {
  echo "<h2 class='col-lg-6 col-lg-offset-2'>Welcome, " . $user[ 'username' ] . "!</h2>";
}
?>


<?php
include( $_SERVER[ 'DOCUMENT_ROOT' ]."/view/layout/footer.php" );
?>
