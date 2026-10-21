<?php
    include_once '../../../admin/config/db.php';
    include_once '../../../admin/config/configSeg.php';

    $database = new db();
    $conn = $database->conectar();

    // ===== NOVO: alterações de conta vindas da validação (email/senha) =====
    if (isset($_SESSION['alteracao_confirmada'])) {
        $alt = $_SESSION['alteracao_confirmada'];
        unset($_SESSION['alteracao_confirmada']);

        if (time() - $alt['ts'] > 300) {
            header("Location: ../configuracoes/perfilConfig.php?aba=seguranca&erro=");
            exit;
        }

        try {
            if ($alt['tipo'] === 'email') {
                // Quando migrar para hash: $alt['valor'] = password_hash($alt['valor'], PASSWORD_DEFAULT);

            } elseif () {

            } else {
                exit;
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    $nomePerfil = trim($_POST['nome']);
    $nicknamePerfil = trim($_POST['nickname']);

    $fotoEnviada = isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK;

    try {
        if ($fotoEnviada) {
            $foto = $_FILES['foto'];
            $extensao = pathinfo($foto['name'], PATHINFO_EXTENSION);
            $nomeArquivo = $_SESSION['usuario_id'] . '.' . $extensao;
            $caminhoDestino = '../../imagens/perfil/' . $nomeArquivo;

            if (!move_uploaded_file($foto['tmp_name'], $caminhoDestino)) {
                die("ERRO AO MOVER O ARQUIVO");
            }

            $caminhoParaSalvar = 'admin/imagens/perfil/' . $nomeArquivo;

            $sql = "UPDATE usuarios SET foto_perfil = :f, onboarding_completo = 1, nome = :n, nickname = :nick WHERE id = :i";
            $stmt = $conn->prepare($sql);
    
            $stmt->bindParam(":f", $caminhoParaSalvar);
            $stmt->bindParam(":n", $nomePerfil);
            $stmt->bindParam(":nick", $nicknamePerfil);
            $stmt->bindParam(":i", $_SESSION['usuario_id']);
        } else {
            $sql = "UPDATE usuarios SET nome = :n, nickname = :nick WHERE id = :i";
            $stmt = $conn->prepare($sql);
    
            $stmt->bindParam(":n", $nomePerfil);
            $stmt->bindParam(":nick", $nicknamePerfil);
            $stmt->bindParam(":i", $_SESSION['usuario_id']);
        }

        if ($stmt->execute()) {
            $_SESSION['usuario_nome'] = $nomePerfil;
            $_SESSION['usuario_nickname'] = $nicknamePerfil;

            if ($fotoEnviada) {
                $_SESSION['usuario_foto'] = $caminhoParaSalvar;
            }

            header("Location: ../configuracoes/perfilConfig.php?aba=editar-perfil");
            exit;
        }

    } catch (PDOException $e) {
        die("ERRO: " . $e);
    }
?>