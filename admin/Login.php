<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeBook</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>

    <h1 id="titulo">LifeBook</h1>
    <center>
    <form id="form-login" action="./controller/crudUser/userLogin.php" method="post">
        <p>
            <h2 id="t2">ENTRE NA SUA CONTA DO LifeBook!</h2>
            <h4 id="t3">Entre na sua conta para ver <br>fotos e videos dos seus amigos!</h4>
        </p>
            <input type="email" name="email" placeholder="Email" required id="email">
            <input type="password" name="senha" placeholder="Senha" id="senha" required>

            <div id="erro">
                <?php if (isset($_GET['erro']) && $_GET['erro'] == 1): ?>
                    Email ou senha incorretos
                <?php elseif (isset($_GET['erro']) && $_GET['erro'] == 0): ?>
                    <span style="color: green;">Conta cadastrada com sucesso!</span>
                <?php endif; ?>
            </div>

            <button type="submit" id="button">Entrar</button>

            <center>
                <a href="register.php" id="button2">Criar nova conta?</a>
            </center>
    </form>
    </center>

    <?php if (isset($_GET['erro'])): ?>
        <script>
            // Remove o "?erro=1" da URL sem recarregar a página
            window.history.replaceState(null, '', window.location.pathname);
        </script>
    <?php endif; ?>

    <script src="js/script.js"></script>
</body>
</html>