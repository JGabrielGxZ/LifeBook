    <div class="config-form-container">
        <h2>Editar perfil</h2>

        <form action="../crudUser/atualizarPerfil.php" method="post" class="config-form" enctype="multipart/form-data">

            <div class="config-foto-linha">
                <label for="foto-input"><img src="<?php echo '../../../' . $_SESSION['usuario_foto']; ?>" alt="Foto de perfil" class="config-img" id="prev"></label>
                <label for="foto-input" class="botao-mudar-foto">Mudar foto</label>
                <input type="file" name="foto" id="foto-input">
            </div>

            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $_SESSION['usuario_nome']; ?>">

            <label for="nickname">Nome de usuário</label>
            <input type="text" name="nickname" id="nickname" value="<?php echo $_SESSION['usuario_nickname']; ?>">

            <button type="submit">Salvar alterações</button>
        </form>
    </div>