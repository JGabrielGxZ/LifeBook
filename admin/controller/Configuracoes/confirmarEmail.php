<?php
    include_once '../../../admin/config/configSeg.php';

    $erro = null;
    $p = $_SESSION['email_pendente'] ?? null;

    if (!$p) {
        header("Location: perfilConfig.php?aba=seguranca");
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $codigo = trim($_POST['codigo'] ?? '');
        
        if (time() > $p['expira_em']) {
            unset($_SESSION['email_pendente']);
            $erro = "O código expirou. Por favor, tente novamente.";
        } elseif ($p['tentativas'] >= 5) {
            unset($_SESSION['email_pendente']);
            $erro = "Você excedeu o número máximo de tentativas. Por favor, tente novamente.";
        } elseif (!password_verify($codigo, $p['codigo_hash'])) {
            $_SESSION['email_pendente']['tentativas']++;
            $erro = "Código incorreto. Por favor, tente novamente.";
        } else {
            $_SESSION['alteracao_confirmada'] = [
                'tipo' => 'email',
                'valor' => $p['novo email'],
                'ts' => time(),
            ];
            unset($_SESSION['email_pendente']);
            header("Location: perfilConfig.php?aba=seguranca&sucesso=1");
            exit;
        }
    }
?>