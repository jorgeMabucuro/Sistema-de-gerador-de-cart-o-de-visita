<?php
include "./../BD/conexao.php";

$nome = htmlspecialchars($_POST['nome']);
$email = strtolower(trim($_POST['email']));
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

if(empty($nome) || empty($email) || empty($senha)){
    echo "preencha todos os campos";
    exit();
}else{
    $inser = $bd->prepare("INSERT INTO administrador (nome, email, senha) VALUES (?,?,?)");
    $inser->execute([$nome, $email, $senha]);
    echo "Administrador cadastrado";
}




?>