<?php
  session_start();
    if (!isset($_SESSION['idusuario'])) {
      header('Location: ./../login/login.php'); 
      exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartão de visita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../Style/menu.css">
    <link rel="stylesheet" href="./cartaoDeVisita.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header class="p-3  border-bottom">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <li class="fw-bold fs-3" id="xpto">XPTO</li>
                </svg>
              </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="./../index.php" class="nav-link px-2 link-secondary">Home</a></li>
              <li><a href="./cartaoDeVisita.php" class="nav-link px-2 link-body-emphasis">Cartão de visita</a></li>
              <!-- <li><a href="./../usuario/usuario.php" class="nav-link px-2 link-body-emphasis">Usuario</a></li> -->
              <li><a href="./../admin/admin.php" class="nav-link px-2 link-body-emphasis">Administrador</a></li>
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
    <main>
        <div class="cv">

            <div class="cvE">
                <h1>Faça seu cartão de visita</h1>
                <p>Personalize seu cartão de visita e destaque-se no mercado com estilo e profissionalismo.</p>
                <a href="./formularioDoCV.html"><button type="button" class="btn btn-warning">Criar Cartão</button></a>
            </div>
            <div class="cv_i">
            </div>
        </div>
    </main>

      <!-- footer das paginas -->
      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3  border-top">
          <p class="col-md-4 mb-0 text-body-secondary">XPTO&copy; 2025. Jorge Mabucuro</p>
      
          <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          </a>
      </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>