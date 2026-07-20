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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>LifeBook</title>
</head>
<body>
<header class="header">
    <div class="header-esquerda">
        <div id="logo">Lifebook</div>
    </div>

    <div class="header-centro">
        <input type="text" placeholder="Pesquisar pessoas, posts, grupos...">
    </div>

    <nav class="header-nav">
        <a href="index.php" class="nav-item ativo">
            <i class="bi bi-house-fill"></i>
        </a>
        <a href="amigos.php" class="nav-item">
            <i class="bi bi-people-fill"></i>
        </a>
    </nav>

    <div class="header-direita">
        <button class="icone-acao">
            <i class="bi bi-bell-fill"></i>
            <span class="badge">3</span>
        </button>
        <button class="icone-acao">
            <i class="bi bi-chat-dots-fill"></i>
        </button>

        <div class="perfil">
            <img src="https://placehold.co/32x32" alt="Foto de perfil" class="imagem">
            <div class="nome"><?php echo $_SESSION['usuario_nickname']; ?></div>
            <i class="bi bi-chevron-down"></i>
        </div>
    </div>
</header>


<main>
    <aside class="sidebar-esquerda">
        <nav>
            <a href="index.php"><i class="bi bi-house-fill"></i>Página Inicial</a>

            <a href=""><i class="bi bi-chat-dots-fill"></i>Mensagens</a>

            <a href=""><i class="bi bi-search"></i>Explorar</a>

            <a href=""><i class="bi bi-people-fill"></i>Amigos</a>

            <a href=""><i class="bi bi-plus-square"></i>Criar</a>

            <a href=""><i class="bi bi-person-circle"></i>Perfil</a>
            <a href=""><i class="bi bi-gear-wide"></i>Configurações</a>
        </nav>
    </aside>

    <section class="feed-principal">
        <div class="criar-post">
            <img src="https://placehold.co/40x40" alt="Foto de perfil de Gabizin" class="imagem">
            <input type="text" placeholder="No que você está pensando, Gabizin?">
        </div>

        <section class="stories">
            <div class="story criar-stories">
                <div class="fundo"></div>
                <a href=""><i class="bi bi-plus-circle-fill"></i></a>
                Criar stories
            </div>

            <div class="story">
                <div class="fundo"></div>
                <img src="https://placehold.co/60x60" alt="Foto de Ana Clara" class="imagem">
                <div class="nome">Ana Clara</div>
                <div class="hora">1h</div>
            </div>
        </section>

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

    <aside class="sidebar-direita">

    </aside>
</main>
</body>
</html>