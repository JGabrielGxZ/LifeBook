<?php
    session_start();
    include_once '../../config/db.php';

    $database = new db();
    $conn = $database->conectar();

    $email    = $_POST['email'];
    $senha    = $_POST['senha'];
    $nome     = $_POST['nome'];
    $nickname = $_POST['nickname'];

    try {
        if (strlen($senha)<6) {
            header("Location: ../../register.php?erro=2");
            exit;
        }

        $sqlEmail = "SELECT * FROM usuarios WHERE email=:e";
        $stmtEmail = $conn->prepare($sqlEmail);
        $stmtEmail->bindParam(':e', $email);
        $stmtEmail->execute();

        if ($stmtEmail->rowCount() > 0) {
            header("Location: ../../register.php?erro=1");
            exit;
        }

        $sqlNick = "SELECT * FROM usuarios WHERE nickname=:k";
        $stmtNick = $conn->prepare($sqlNick);
        $stmtNick->bindParam(':k', $nickname);
        $stmtNick->execute();

        if ($stmtNick->rowCount() > 0) {
            header("Location: ../../register.php?erro=3");
            exit;
        }

        $sql = "INSERT INTO usuarios(email, senha, nome, nickname) values (:e, :s, :n, :k)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':e', $email);
        $stmt->bindParam(':s', $senha);
        $stmt->bindParam(':n', $nome);
        $stmt->bindParam(':k', $nickname);
        
        if ($stmt->execute()) {
            $_SESSION['usuario_id'] = $conn->lastInsertId();
            $_SESSION['usuario_senha'] = $senha;
            $_SESSION['usuario_email'] = $email;
            $_SESSION['usuario_nome'] = $nome;
            $_SESSION['usuario_nickname'] = $nickname;
            header("Location: ../../configurar_perfil.php");
            exit;
        }
    } catch (PDOException $e) {

        exit;
    }
?>