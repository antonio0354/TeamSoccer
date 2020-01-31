<?php
session_start();
session_unset();
session_destroy();
setcookie("PHPSESSID","",0,"/");
header("Location:index.php");