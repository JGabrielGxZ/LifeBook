<?php
    include_once '../config/db.php';

    session_start();
    session_unset();
    session_destroy();
    header("Location: ../login.php");
?>