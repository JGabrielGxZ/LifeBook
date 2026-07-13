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
    <center><form action="controller/crudUser/userRegister.php" method="POST">
    <p><h2 id="t2">CRIE UMA NOVA CONTA!</h2>
        <h4 id="t3">É rapido e facil!</h4>
    </p>
        <input type="email" placeholder="Email" required id="email" name="email">
        <br>
        <input type="password" placeholder="Senha" required name="senha">
        <br>
        <input type="text" placeholder="Nome Completo" required name="nome">
        <br>
        <input type="text" placeholder="Nome de Usúario" required name="nickname">
        <br>
        <button type="submit" id="button">Enviar</button>

    </form>
    <center><p id="login1">Já tem uma conta?</p><a href="Login.php" id="login2">Conecte-se</a></center>
    </center>
</body>
</html>