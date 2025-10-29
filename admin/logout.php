<?php include_once './config/config.php';

unset($_SESSION['userlogged']);

header("Location:login.php");