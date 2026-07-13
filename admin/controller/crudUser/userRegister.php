<?php
    include_once '../../config/db.php';

    $database = new db();
    $conn = $database->conectar();

    $email    = $_POST['email'];
    $senha    = $_POST['senha'];
    $nome     = $_POST['nome'];
    $nickname = $_POST['nickname'];

    try {
        $sql = "INSERT INTO usuarios(email, senha, nome, nickname) values (:e, :s, :n, :k)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':e', $email);
        $stmt->bindParam(':s', $senha);
        $stmt->bindParam(':n', $nome);
        $stmt->bindParam(':k', $nickname);

        if ($stmt->execute()) {
            header("Location: ../../login.php");
        }
    } catch (PDOException $e) {
        die("ERRO AO TENTAR CRIAR USUARIO: " . $e->getMessage());
    }
?>