<?php
    session_start();

    include_once '../../../admin/config/db.php';

    if (!isset($_SESSION["usuario_id"])) {
        header("Location: ../../Login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações-Perfil</title>
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="icon" type="image/x-icon" href="../../imagens/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <?php include_once '../partials/header.php'; ?>

    <main>
        <?php include_once '../partials/sidebar-esquerda.php'; ?>

        <aside class="sidebar-config">
            <a href="perfilConfig.php?aba=editar-perfil">Editar perfil</a>
            <a href="perfilConfig.php?aba=seguranca">Senha e segurança</a>
        </aside>

        <section class="config-conteudo">
            <?php
            $aba = $_GET['aba'] ?? 'editar-perfil';

            if ($aba === 'editar-perfil') {
                include 'abas/editar-perfil.php';
            } elseif ($aba === 'seguranca') {
                include 'abas/seguranca.php';
            }
            ?>
        </section>
    </main>
        <script src="../../js/script.js"></script>
        <script src="../../js/config.js"></script>
</body>
</html>