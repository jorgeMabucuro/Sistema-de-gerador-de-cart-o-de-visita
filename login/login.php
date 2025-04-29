<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="./../popup/popup.css">
    <script defer src="./../popup/popup.js"></script>
</head>
<body>
    <div class="divForm">
        <li class="fw-bold fs-1" id="xpto">XPTO</li>
        <form action="loginEntra.php" id="formulario" method="POST">
        </a>
        <label for="email" class="lab">E-mail</label><br>
        <input required type="email" name="email" id="email" class="sep"><br>
        <label for="senha" class="lab">Senha</label><br>
        <input required type="password" name="senha" id="senha" class="sep"><br>
        <p>Não tens conta? <a href="./formularioCadastro.php">Criar conta</a></p>
        <button type="submit" class="btn btn-light" >Entar</button>
        </form>
    </div>
    
    <?php include './../popup/popup.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>