<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: admin/login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/css/css.css">
    <title>LifeBook</title>
</head>
<body>
    <p >
    <h1 style="color: white;">SEJA BEM VINDO <b><?php echo $_SESSION['usuario_nickname']; ?></b> AO LIFEBOOK!!</h1>
    </p>
</body>
</html>