<?php
session_start();
if (!isset($_SESSION['idusuario'])) {
    header('Location: ./login/login.php');
    exit();
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include './../BD/conexao.php';

$nomeCompleto = trim($_POST['nome'] ?? '');
$emailProfissional = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$cargo = trim($_POST['cargo'] ?? '');
$enderecoDaEmpresa = trim($_POST['endereco'] ?? '');
$departamento = trim($_POST['departamento'] ?? '');
$telefoneCorporativo = trim($_POST['telefone'] ?? '');
$usuario_id = $_SESSION['idusuario'];
$admin_id = 1;

if (
    empty($nomeCompleto) || empty($emailProfissional) || empty($enderecoDaEmpresa) ||
    empty($cargo) || empty($telefoneCorporativo) || empty($departamento)
) {
    echo "Preencha todos os campos.";
    exit();
}

if (!filter_var($emailProfissional, FILTER_VALIDATE_EMAIL)) {
    echo "Email inválido!";
    exit();
}

$stmt = $bd->prepare("SELECT idCartaoDeVisita FROM cartaodevisita WHERE emailProfissional = ?");
$stmt->execute([$emailProfissional]);

if ($stmt->rowCount() > 0) {
    echo "Email já está cadastrado.";
    exit();
}

$ins = $bd->prepare("INSERT INTO cartaodevisita 
    (nome, cargo, departamento, telefoneCorporativo, emailProfissional, enderecoDaEmpresa, usuario_idusuario, administrador_idadministrador) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$ins->execute([
    $nomeCompleto, $cargo, $departamento, $telefoneCorporativo,  $emailProfissional, $enderecoDaEmpresa, $usuario_id, $admin_id
]);

echo "<p>Cadastro realizado com sucesso!</p>";

header("Location: cv_pdf.php?nome=" . urlencode($nomeCompleto) . "&cargo=" . urlencode($cargo) . "&departamento=" . urlencode($departamento) .
    "&telefone=" . urlencode($telefoneCorporativo) . "&email=" . urlencode($emailProfissional) .  "&endereco=" . urlencode($enderecoDaEmpresa));
exit();


?>