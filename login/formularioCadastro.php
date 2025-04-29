<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../popup/popup.css">
    <script defer src="./../popup/popup.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        h1{
            text-align: center;
        }
        .user{
            width: 80%;
            padding: 20px;
            margin: auto;
        }
        #xpto{
            text-transform: none;
            list-style-type: none;
            color: brown;
            padding: 0px 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <li class="fw-bold fs-1" id="xpto">XPTO</li>

    <h1>Cadastrar Usuario</h1>
    <div class="user">
        <form id="cadastroForm" class="row g-3" action="cadastro.php" method="POST">
            <div class="col-md-6">
                <label for="inputName" class="form-label">Nome Completo</label>
                <input required type="text" name="nome" class="form-control" id="inputName">
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input required type="email" name="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-4">
              <label for="inputEndereco" class="form-label">Endereço</label>
              <input required type="text" name="endereco" class="form-control" id="inputEndereco" >
            </div>
            <div class="col-md-4">
              <label for="inputCargo" class="form-label">Cargo</label>
              <input required type="text" name="cargo" class="form-control" id="inputCargo">
            </div>
            <div class="col-md-4">
              <label for="inputdepartamneto" class="form-label">Departamento</label>
              <input required type="text" name="departamento" class="form-control" id="inputdepartamneto">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">Género</label>
              <select id="inputState" name="gselect" class="form-select">
                <option selected>escolha...</option>
                <option value="Feminino">Feminino</option>
                <option value="Masculino">Masculino</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="inputTelefone" class="form-label">Telefone</label>
              <input required type="text" name="telefone" class="form-control" id="inputTelefone">
            </div>
            <div class="col-4">
              <label for="inputSenha" class="form-label">Senha</label>
              <input required type="password" name="senha" class="form-control" id="inputSenha" >
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary" id="btnSubmit">Cadastrar</button>
            </div>
        </form>
    </div>


    <?php include './../popup/popup.php'; ?>

    <!-- <script src="js/vfc.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

