<?php include_once './config/config.php'; ?>

<?php
    if(isset($_SESSION['userlogged']) == true) {
        echo "verdadeiro";
    } else {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeBook</title>
</head>
<body>
    <h1>SEJA BEM VINDO AO LIFEBOOK!!</h1>
</body>
</html>