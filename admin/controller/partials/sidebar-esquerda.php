<?php
$paginaAtual = basename($_SERVER['PHP_SELF']);
?>


<aside class="sidebar-esquerda">
            <nav>
                <div class="nav-header">
                    <a href="../../../index.php">
                        <i class="bi bi-house-fill"></i>
                        <span>Página Inicial</span>
                    </a>

                    <a href="">
                        <i class="bi bi-chat-dots-fill"></i>
                        <span>Mensagens</span>
                    </a>

                    <a href="">
                        <i class="bi bi-search"></i>
                        <span>Explorar</span>
                    </a>

                    <a href="">
                        <i class="bi bi-people-fill"></i>
                        <span>Amigos</span>
                    </a>

                    <a href="">
                        <i class="bi bi-plus-square"></i>
                        <span>Criar</span>
                    </a>
                </div>
                <div class="nav-footer">
                        <a href="../../../admin/controller/perfil/meuPerfil.php" class="<?= $paginaAtual == 'meuPerfil.php' ? 'ativo' : '' ?>">
                        <img src="<?php echo "../../../" . $_SESSION['usuario_foto'];?>" alt="Foto de perfil" class="imagem">
                        <span>Perfil</span>
                    </a>
                    <a href="../../../admin/controller/configuracoes/perfilConfig.php" class="<?= $paginaAtual == 'perfilConfig.php' ? 'ativo' : '' ?>">
                        <i class="bi bi-gear-wide"></i>
                        <span>Configurações</span>
                    </a>
                </div>
            </nav>
        </aside>