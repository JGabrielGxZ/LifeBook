<?php


$db = new mysqli("localhost", "root", "", "lifebooksql", "3306");


if($db->connect_errno){
    echo "Erro Banco de dados:{$db->connect_error}";
    exit();
}

$password = md5('123123');
$insert = "INSERT INTO users
(
	name, 
	email, 
	password
) 
VALUES 
	(
		'maria', 
		'mmaria@gmail.com', 
	    '{$password}'
	);";

    $result = $db->query($insert);

    if($result){
        echo "salvo com sucesso ID => {$db->insert_id} <br>";
    }else{
        echo "ERRO insert: {$db->error}";
    }

//consultando dados
$select = "SELECT * FROM users";
$result = $db->query($select);

if($result){
    while($obj = $result->fetch_object()){
        echo "Nome: {$obj->name} <br>";
    }
}else{
    echo "Erro no SELECT:{$db->error}";
}