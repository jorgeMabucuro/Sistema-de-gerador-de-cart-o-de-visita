<?php
session_start();
if (!isset($_SESSION['idadministrador'])) {
  header("Location: ./../login/login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../Style/menu.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <li class="fw-bold fs-3" id="xpto">XPTO</li>
                </svg>
              </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="./../index.php" class="nav-link px-2 link-secondary">Home</a></li>
              <li><a href="./../cartaoDeVisita/cartaoDeVisita.php" class="nav-link px-2 link-body-emphasis">Cartão de visita</a></li>
              <!-- <li><a href="./../usuario/usuario.php" class="nav-link px-2 link-body-emphasis">Usuario</a></li> -->
              <li><a href="./admin.php" class="nav-link px-2 link-body-emphasis">Administrador</a></li>
            </ul>
    
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
              <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
    
            <div class="dropdown text-end">
              <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="./../img/perfil_off.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="./../login/logout.php">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      
      <section>
        <h1>Administrador</h1>
        <div class="cadastro">
          <h3>Cadastro de administrador</h3>
          <form class="col g-4" action="adminBack.php" method="POST">
            <div class="row-md-2">
              <label for="inputName" class="form-label">Nome Completo</label>
              <input required type="text" name="nome" class="form-control" id="inputName">
            </div>
            <div class="row-md-2">
              <label for="inputEmail4" class="form-label">Email</label>
              <input required type="email" name="email" class="form-control" id="inputEmail4">
            </div>
            <div class="row-md-2">
              <label for="inputSenha" class="form-label">Senha</label>
              <input required type="password" name="senha" class="form-control" id="inputSenha" >
            </div>
            <div class="col-12" class="btn">
              <button type="submit" class="btn btn-primary">Criar administrador</button>
            </div>
          </form>
        </div>
      </section>
    

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>