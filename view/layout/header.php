<DOCTYPEhtml>
  <head>
    <title><?= $pagetitle; ?></title>
    <link rel="stylesheet" href="http://doshdata.com/css/bootstrap.css">
    <link rel="stylesheet" href="http://doshdata.com/css/styles.css">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="http://doshdata.com/index.php">Personal Finance</a>
        </div>
        <ul class="nav navbar-nav">
          <li class=""><a href="">Home</a></li>
          <li><a href="http://doshdata.com/view/viewfinances.php">View Finances</a></li>
          <li><a href="#">Edit Finances</a></li>
          <li><a href="#">TEMP</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://doshdata.com/view/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

          <?php
          if (!isset($_COOKIE['loggedin'])) {

            echo '<li><a href="' . 'http://doshdata.com/view/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
          } else {
            echo '<li><a href="' . 'http://doshdata.com/model/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';
          }
          ?>

        </ul>
      </div>
    </nav>
