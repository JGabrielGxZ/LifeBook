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
    <form id="form-login" action="./controllers/userLogin.php" method="post">
        <p>
            <h2 id="t2">ENTRE NA SUA CONTA DO LifeBook!</h2>
            <h4 id="t3">Entre na sua conta para ver <br>fotos e videos dos seus amigos!</h4>
        </p>
            <input type="email" name="email" placeholder="Email" required id="email">
            <br>
            <input type="password" name="password" placeholder="Senha" id="senha"required>
            <br>
            <button type="submit" id="button">Entrar</button>
        <center>
            <button type="submit" id="button2"><a href="register.php" id="button2">Criar nova conta?</a></button>
        </center>

    </form>
    </center>

    <script src="./js/login.js"></script>
</body>
</html>