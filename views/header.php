<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- La constante URL viene desde el archivo config/congfig.php -->
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Css -->
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
  <title>Main</title>
</head>

<body>
  <div class="container"></div>
  <nav class="navbar  navbar-expand-lg navbar-light bg-light" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="<?php echo constant('DASH'); ?>">The DataStones</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo constant('DASH'); ?>">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo constant('MESAS'); ?>">Mesas Disponibles</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
              aria-expanded="false">Pedidos</a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
              <li><a class="dropdown-item" href="<?php echo constant('NUEVAORDEN');?>">Tomar Orden</a></li>
              <li><a class="dropdown-item" href="#">Ordenes Activas</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pedidos en Linea</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Reservaciones</a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle optlog" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <p class="circulo"></p> Hola, <?php echo $_SESSION['name_user'] . " " . $_SESSION['surname_user'];?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="navbarDropdown">
              <?php if ($_SESSION['rol_id'] == "1" || $_SESSION['rol_id'] == "2"):?>
              <li><a class="dropdown-item" href="#">Inventario</a></li>
              <li><a class="dropdown-item" href="#">Lista de Asistencia</a></li>
              <li><a class="dropdown-item" href="#">Nomina</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Reporte de incidencia</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Configuracion</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <?php endif;?>
              <li><a class="dropdown-item" href="<?php echo constant('URL'); ?>controllers/destroy.php">Cerrar
                  sesion</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- jquery -->
  <script src="<?php echo constant('URL'); ?>public/js/jquery-3.6.0.min.js"></script>
  <!-- scroll -->
  <script src="<?php echo constant('URL'); ?>public/js/scrollNavbar.js"></script>
  <!-- bootstrap -->
  <script src="<?php echo constant('URL'); ?>public/js/bootstrap.min.js"></script>
  <!-- fontAwesome -->
  <script src="https://kit.fontawesome.com/33cbed8d12.js" crossorigin="anonymous"></script>
</body>

</html>