<header class="header">
        <a href="../../../index.php" class="generic-a">
            <div class="header-esquerda">
                <img src="../../imagens/logo.png" alt="" class="logo-image">
                <div id="logo">Lifebook</div>
            </div>
        </a>


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
                    <a href="../../../admin/controller/configuracoes/perfilConfig.php?aba=editar-perfil"><i class="bi bi-person-fill-gear"></i>Configurações de perfil</a>
                    <a href="../../../admin/controller/logout.php"><i class="bi bi-door-closed"></i>Sair</a>
                </div>
            </div>
        </div>
    </header>