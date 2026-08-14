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
    <header class="header">
        <div class="header-esquerda">
            <img src="../../imagens/logo.png" alt="" class="logo-image">
            <div id="logo">Lifebook</div>
        </div>

        <div class="header-direita">
            <nav class="header-nav">
                <a href="../../../index.php" class="nav-item">
                    <i class="bi bi-house-fill"></i>
                </a>
                <a href="amigos.php" class="nav-item">
                    <i class="bi bi-people-fill"></i>
                </a>
            </nav>
            <button class="icone-acao">
                <i class="bi bi-bell-fill"></i>
                <span class="badge">3</span>
            </button>
            <button class="icone-acao">
                <i class="bi bi-chat-dots-fill"></i>
            </button>

            <div class="perfil" id="perfil">
                <img src="<?php echo "../../../" . $_SESSION['usuario_foto'];?>" alt="Foto de perfil" class="imagem">
                <div class="nome"><?php echo $_SESSION['usuario_nickname']; ?></div>
                <i class="bi bi-chevron-down"></i>

                <div class="perfil-menu" id="perfil-menu">
                    <a href="../../../admin/controller/perfil/meuPerfil.php"><i class="bi bi-person"></i>Ver perfil</a>
                    <a href="../../../admin/controller/configurações/perfilConfig.php"><i class="bi bi-person-fill-gear"></i>Configurações de perfil</a>
                    <a href="../../../admin/controller/logout.php"><i class="bi bi-door-closed"></i>Sair</a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <aside class="sidebar-esquerda">
            <nav>
                <div class="nav-header">
                    <a href="../../../index.php"><i class="bi bi-house-fill"></i>Página Inicial</a>

                    <a href=""><i class="bi bi-chat-dots-fill"></i>Mensagens</a>

                    <a href=""><i class="bi bi-search"></i>Explorar</a>

                    <a href=""><i class="bi bi-people-fill"></i>Amigos</a>

                    <a href=""><i class="bi bi-plus-square"></i>Criar</a>
                </div>
                <div class="nav-footer">
                    <a href="../../../admin/controller/perfil/meuPerfil.php" class="ativo"><img src="<?php echo "../../../" . $_SESSION['usuario_foto'];?>" alt="Foto de perfil" class="imagem"></i>Perfil</a>
                    <a href=""><i class="bi bi-gear-wide"></i>Configurações</a>
                </div>
            </nav>
        </aside>

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