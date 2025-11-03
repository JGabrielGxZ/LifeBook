<?php
include_once "../config/db.php";

$response = [];

$erro = [];
empty($_POST['email']) ? $erro[] = "informe um email" : "";
empty($_POST['password']) ? $erro[] = "informe a senha" : "";

if (count($erro) == 0){

} else {
    $response = [
        'status' => false,
        'message' => $erro,
    ];
}

echo json_encode($response);