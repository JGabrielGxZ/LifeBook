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
    <form action="controller/crudUser/userRegister.php" method="POST">
        <p>
            <h2 id="t2">CRIE UMA NOVA CONTA!</h2>
            <h4 id="t3">É rapido e facil!</h4>
        </p>
            <input type="email" placeholder="Email" required id="email" name="email">
            <input type="password" placeholder="Senha" required name="senha">
            <input type="text" placeholder="Nome Completo" required name="nome">
            <input type="text" placeholder="Nome de Usúario" required name="nickname">

            <div id="erro">
                <?php if (isset($_GET['erro']) && $_GET['erro'] == 1): ?>
                    Já existe uma conta com esse email
                <?php elseif((isset($_GET['erro']) && $_GET['erro'] == 2)): ?>
                    senha deve ter pelo menos 6 caracteres
                <?php elseif((isset($_GET['erro']) && $_GET['erro'] == 3)): ?>
                    Nome de Usuario já existe
                <?php endif;?>
            </div>

            <button type="submit" id="button">Enviar</button>
    </form>

    <center>
        <p id="login1">Já tem uma conta?</p>
        <a href="login.php" id="login2">Conecte-se</a>
    </center>
    </center>

    <?php if (isset($_GET['erro'])): ?>
        <script>
            // Remove o "?erro=1" da URL sem recarregar a página
            window.history.replaceState(null, '', window.location.pathname);
        </script>
    <?php endif; ?>
</body>
</html>