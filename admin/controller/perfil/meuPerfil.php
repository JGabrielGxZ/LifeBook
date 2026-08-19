<?php
    session_start();
    include_once '../../config/db.php';

    if (!isset($_SESSION["usuario_id"])) {
        header("Location: ../../Login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeBook - Meu Perfil</title>
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="icon" type="image/x-icon" href="../../imagens/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

    <?php include_once '../partials/header.php'; ?>

    <main>
        <?php include_once '../partials/sidebar-esquerda.php'; ?>

        <section class="feed-principal">
            <div class="perfil-headers">
                <img src="<?php echo "../../../" . $_SESSION['usuario_foto'];?>" alt="Foto de perfil de Gabizin" class="foto-perfil-principal">
                <div class="nomes-column">
                    <div class="perfil-nickname"><?php echo $_SESSION['usuario_nickname'];?></div>
                    <div class="perfil-name"><?php echo $_SESSION['usuario_nome'];?></div>
                </div>
            </div>
            <div class="posts">
                <div class="post">
                    <div class="post-header">
                        <img src="https://placehold.co/40x40" alt="Foto de perfil de Gabizin" class="imagem">
                        <div class="info">
                            <div class="nome">Gabizin</div>
                            <div class="hora">2h</div>
                        </div>
                    </div>
                    <p class="paragrafo-text">Acabei de finalizar meu novo projeto! Foi um desafio, mas o resultado ficou incrível.</p>
                    <img src="https://placehold.co/600x400" alt="Imagem publicada no post" class="post-imagem">

                    <div class="post-acoes">
                        <button><i class="bi bi-hand-thumbs-up"></i> Curtir</button>
                        <button><i class="bi bi-chat-left-text"></i> Comentar</button>
                        <button><i class="bi bi-share"></i> Compartilhar</button>
                        <button><i class="bi bi-bookmark"></i> Salvar</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="../../js/script.js"></script>
</body>
</html>