<?php
    session_start();
    if (!isset($_SESSION['usuario_id'])) {
        header("Location: login.php");
        exit;
    }
    include_once '../../config/db.php';

    $database = new db();
    $conn = $database->conectar();

    try {
        $sql = "UPDATE usuarios SET onboarding_completo = 1 WHERE id = :i";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":i", $_SESSION['usuario_id']);

        if ($stmt->execute()) {
            header("Location: ../../../index.php");
            exit;
        }
    } catch (PDOException $e) {
        die("ERRO: " . $e);
    }

?>