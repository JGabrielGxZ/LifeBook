<?php
    session_start();
    if (!isset($_SESSION['usuario_id'])) {
        header("Location: login.php");
        exit;
    }
    include_once '../../config/db.php';
    $database = new db();
    $conn = $database->conectar();

    $foto = $_FILES['foto'];

    $extensao = pathinfo($foto['name'], PATHINFO_EXTENSION);

    $nomeArquivo = $_SESSION['usuario_id'] . '.' . $extensao;

    $caminhoDestino = '../../imagens/perfil/' . $nomeArquivo;

    if (move_uploaded_file($foto['tmp_name'], $caminhoDestino)) {
        $caminhoParaSalvar = 'admin/imagens/perfil/' . $nomeArquivo;

        try {
            $sql = "UPDATE usuarios SET foto_perfil = :f, onboarding_completo = 1 WHERE id = :i";
            $stmt = $conn->prepare($sql);
    
            $stmt->bindParam(":f", $caminhoParaSalvar);
            $stmt->bindParam(":i", $_SESSION['usuario_id']);
            
    
            if ($stmt->execute()) {
                $_SESSION['usuario_foto'] = $caminhoParaSalvar;
                header("Location: ../../../index.php");
                exit;
            }
        } catch (PDOException $e) {
            die("ERRO: " . $e);
        }
    } else {
        die("ERRO AO MOVER O ARQUIVO");
    }
?>