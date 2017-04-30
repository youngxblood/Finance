<?php
$pagetitle = 'View Finances';
include($_SERVER['DOCUMENT_ROOT']."/view/layout/header.php");
?>



<div class="container">
  <div class="col-lg-8">
    <h1>Here is where you can see your finances.</h1>


  <?php

    if (!isset($_COOKIE['loggedin'])) {
      echo '<p>Please log in to see the your personal financial contents.</p>';
    } else {
      echo $_COOKIE['loggedin'];
    }

  ?>



  </div>
</div>




<?php
include($_SERVER['DOCUMENT_ROOT']."/view/layout/footer.php");
?>
