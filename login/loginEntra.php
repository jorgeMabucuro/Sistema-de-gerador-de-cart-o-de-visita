<?php
session_start();
include './../BD/conexao.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $senha = trim($_POST['senha']);
    function verificarUsuario($bd, $email, $tabela, $idCampo) {
        $stmt = $bd->prepare("SELECT $idCampo, senha FROM $tabela WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    $admin = verificarUsuario($bd, $email, "administrador", "idadministrador");
    if ($admin && password_verify($senha, $admin['senha'])) {
        $_SESSION['idadministrador'] = $admin['idadministrador'];
        header("Location: ./../admin/admin.php");
        exit();
    }
    $user = verificarUsuario($bd, $email, "usuario", "idusuario");
    if ($user && password_verify($senha, $user['senha'])) {
        $_SESSION['idusuario'] = $user['idusuario'];
        header("Location: ./../index.php");
        exit();
    }
    $_SESSION['popup'] = [
        'tipo' => 'erro', 'titulo' => 'Falha no login', 'mensagem' => 'E-mail ou senha incorretos.'
    ];
    header("Location: login.php");
    exit();
}


 ?>



