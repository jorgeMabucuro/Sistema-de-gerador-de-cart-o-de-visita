<?php
  session_start();
    if (!isset($_SESSION['idusuario'])) {
      header('Location: ./login/login.php'); 
      exit();
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Style/menu.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
  <header class="p-3 mb-3 border-bottom " >
    <div class="container" id="menu" >
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <li class="fw-bold fs-3" id="xpto">XPTO</li>
          </svg>
        </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="./index.php" class="nav-link px-2 link-secondary">Home</a></li>
              <li><a href="./cartaoDeVisita/cartaoDeVisita.php" class="nav-link px-2 link-body-emphasis">Cartão de visita</a></li>
              <!-- <li><a href="./usuario/usuario.php" class="nav-link px-2 link-body-emphasis">Usuario</a></li> -->
              <li><a href="./admin/admin.php" class="nav-link px-2 link-body-emphasis">Administrador</a></li>
            </ul>
            
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
              <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
            
            <div class="dropdown text-end">
              <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="./img/perfil_off.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small">
                <li><a class="dropdown-item" href="#">Nova conta</a></li>
                <li><a class="dropdown-item" href="#">Definições</a></li>
                <li><a class="dropdown-item" href="#">Perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="./login/logout.php">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </header>
    
      <main>
        <section>
          <div class="bv">
            <div class="lesquerdo">
                <h1>Bem vindo a XPTO</h1>
                <p>A XPTO é uma empresa onde cada cartão de visita é uma oportunidade de brilhar! Em um mundo onde a primeira impressão conta, oferecemos a você a chance de se destacar com cartões que refletem sua identidade única e profissional</p>
                <a href="./cartaoDeVisita/cartaoDeVisita.php" class="btnH"><button type="button" class="btn btn-light">Criar Cartão de visita</button></a>
            </div>
            <div class="imagem">
            </div>
          </div>
        </section>
      </main>

    <!-- footer das paginas -->
    <footer>

      <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
          <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><li class="fw-bold fs-1" id="xpto">XPTO</li></svg>
            </a>
          </div>
          
          <div class="col mb-3">
      
          </div>
      
          <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
          </div>
          
          <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
          </div>
          
          <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
          </div>
        </footer>
      </div>
      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-body-secondary">&copy; 2024 Company, Inc</p>
      
          <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          </a>
      </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>