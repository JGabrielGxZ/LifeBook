<?php
    session_start();
    include_once '../../config/db.php';

    if (!isset($_SESSION["usuario_id"])) {
        header("Location: ../../Login.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="icon" type="image/x-icon" href="../../imagens/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    
</body>
</html>