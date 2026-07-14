<?php
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
            header("Location: ../../../index.php");
            exit;
            //while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //    echo "Email: " . htmlspecialchars($linha['email']) . "<br>";
            //    echo "Senha: " . htmlspecialchars($linha['senha']) . "<hr>";
            //}
        }else{
            echo '<script>alert("EMAIL OU SENHA ICORRETOS!")</script>';
            exit;
        }
    } catch (PDOException $e) {
        die("ERRO AO TENTAR ENCONTRAR USUARIO: " . $e->getMessage());
    }
?>