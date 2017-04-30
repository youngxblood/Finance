<?php
$pagetitle = 'Home';
include 'inc/init.php';
include($_SERVER['DOCUMENT_ROOT']."/view/layout/header.php");
?>



<div class="container">
  <div class="col-lg-8">
    <p>Welcome to the main page!</p>
  </div>
</div>

<?php
if(isset($_COOKIE['cookie'])){
    $cookie = $_COOKIE['cookie'];
    echo $cookie;
}
?>





<?php
include($_SERVER['DOCUMENT_ROOT']."/view/layout/footer.php");
?>
