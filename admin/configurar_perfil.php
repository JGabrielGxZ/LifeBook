<?php
    session_start();

    if (!isset($_SESSION['usuario_id'])) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <link rel="icon" type="image/x-icon" href="imagens/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>LifeBook</title>
</head>
<body>
    <h1 id="titulo">LifeBook</h1>
    <center>
    <form id="form-login" action="controller/crudUser/processarFoto.php" method="post" enctype="multipart/form-data">
        <div class="avatar-container">
            <img src="imagens/defaultAvatar.png" id="preview">
            <label for="foto-input" class="botao-camera">
                <i class="bi bi-camera-fill"></i>
            </label>
            <input type="file" name="foto" id="foto-input">
        </div>
        
        <p>
            <h2 id="t2">Vai dizer que um bonitão desses não tem Foto?</h2>
            <h4 id="t3">Escolha uma foto para seus amigos te reconhecerem!</h4>
        </p>
        
            <div id="erro">
                <?php if (isset($_GET['erro']) && $_GET['erro'] == 1): ?>
                    Email ou senha incorretos
                <?php elseif (isset($_GET['erro']) && $_GET['erro'] == 0): ?>
                    <span style="color: green;">Conta cadastrada com sucesso!</span>
                <?php endif; ?>
            </div>

            <button type="submit">Salvar foto</button>
            

            <center>
                <a href="index.php">pular por enquanto...</a>
            </center>
    </form>
    </center>
    <script src="js/configPerfil.js"></script>
</body>
</html>