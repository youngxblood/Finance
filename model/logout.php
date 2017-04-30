<?php

setcookie("loggedin", "val", time() - (300), "/");
header("Location: ../index.php");
die();
