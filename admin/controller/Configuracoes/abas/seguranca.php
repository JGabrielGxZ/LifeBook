    <div class="config-form-container">
        <h2>Senha e Segurança:</h2>

        <h3>Mude seu Email:</h3>
        <form action="validacaoUpdate.php" method="post" class="config-form" enctype="multipart/form-data">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php echo $_SESSION['usuario_email']; ?>">

            <label for="senha">Para confirmar digite sua senha</label>
            <input type="password" name="senha" id="senha" required>

            <button type="submit" value="email" name="action">Salvar alterações</button>
        </form>

        <form action="validacaoUpdate.php" method="post" class="config-form" enctype="multipart/form-data">
            <label for="senhaAtual">Senha Atual:</label>
            <input type="password" name="senhaAtual" id="senhaAtual" required>

            <label for="senhaNova">Nova senha:</label>
            <input type="password" name="senhaNova" id="senhaNova" required minlength="6">

            <label for="senhaConf">Confirme a nova senha</label>
            <input type="password" name="senhaConf" id="senhaConf" required>

            <button type="submit" value="senha" name="action">Salvar alterações</button>
        </form>
    </div>