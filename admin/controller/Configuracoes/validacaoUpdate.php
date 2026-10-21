<?php 
    include_once '../../../admin/config/db.php';
    include_once '../../../admin/config/configSeg.php';
    include_once '../../../admin/config/email.php';


    if ($_SERVER['REQUEST_METHOD'] !== "POST" || !isset($_POST['action'])) {
        header("Location: perfilConfig.php?aba=seguranca");
        exit;
    }

    $database = new db();
    $conn = $database->conectar();
    $userId = $_POST["usuario_id"];
    $volta = "perfilConfig.php?aba=seguranca";


    function senhaCorreta(string $digitada, string $doBanco): bool {
        return $digitada === $doBanco;
    }

    $sql = "SELECT senha, email FROM usuarios WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $userId);
    $stmt->execute();
    $atual = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($_POST['action'] === "email") {
        $email = trim($_POST["email"] ?? '');
        $senha = $_POST["senha"] ?? '';
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: $volta&erro=3");
            exit;
        }

        if (strcasecmp($email, $atual['email']) === 0) {
            header("Location: $volta&erro=1");
            exit;
        }

        if (!senhaCorreta($senha, $atual['senha'])) {
            header("Location: $volta&erro=4");
            exit;
        }

        $sql = "SELECT 1 FROM usuarios WHERE email = :e";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":e", $email);
        $stmt->execute();
        if ($stmt->fetchColumn()) {
            header("Location: $volta&erro=2");
            exit;
        }

        $codigo = str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        $_SESSION['email_pendente'] = [
            'novo email' => $email,
            'codigo_hash' => password_hash($codigo, PASSWORD_DEFAULT),
            'expira_em' => time() + 15 * 60,
            'tentativas' => 0,
        ];

        try {
            enviarCodigo($email, $codigo);
        } catch (\Throwable $e) {
            unset($_SESSION['email_pendente']);
            error_log($e->getMessage()); // para você ver o motivo no log
            header("Location: $volta&erro=10");
            exit;
        }
    }

if ($_POST['action'] === 'senha') {
    $senhaAtual = $_POST['senhaAtual'] ?? '';
    $senhaNova = $_POST['senhaNova'] ?? '';
    $senhaConf = $_POST['senhaConf'] ?? '';

    if (!senhaCorreta($senhaAtual, $atual['senha'])) {
        header("Location: $volta&erro=4");
        exit;
    }

    if ($senhaNova < 6) {
        header("Location: $volta&erro=5");
        exit;
    }

    if ($senhaNova !== $senhaConf) {
        header("Location: $volta&erro=6");
        exit;
    }

    if ($senhaNova === $senhaAtual) {
        header("Location: $volta&erro=7");
        exit;
    }

    $_SESSION['alteracao_confirmada'] = [
        'tipo' => 'senha',
        'valor' => $senhaNova,
        'ts' => time(),
    ];
    header("Location: ../../crudUser/atualizarPerfil.php");
    exit;
}

?>