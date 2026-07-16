<?php
    session_start();
    include_once '../../config/db.php';
    $database = new db();
    $conn = $database->conectar();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    try {
        $sql = "SELECT * FROM usuarios where email=:e and senha=:s";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':e', $email);
        $stmt->bindParam(':s', $senha);
        $stmt->execute();

        if ($stmt->rowCount() === 1) {
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_senha'] = $usuario['senha'];
            $_SESSION['usuario_email'] = $usuario['email'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            $_SESSION['usuario_nickname'] = $usuario['nickname'];
            header("Location: ../../../index.php");
            exit;
            //while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //    echo "Email: " . htmlspecialchars($linha['email']) . "<br>";
            //    echo "Senha: " . htmlspecialchars($linha['senha']) . "<hr>";
            //}
        }else{
            header("Location: ../../login.php?erro=1");
            exit;
        }
    } catch (PDOException $e) {
        die("ERRO AO TENTAR ENCONTRAR USUARIO: " . $e->getMessage());
    }
?>