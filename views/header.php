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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <!-- Css -->
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
  <title>Para el amor de mi vida</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <figure class="text-center nombres">
          <blockquote class="blockquote">
            <p>Monse <img class="corazones" src="<?php echo constant('URL'); ?>public/img/cora.png" alt=""> Rogelio</p>
          </blockquote>
          <figcaption class="blockquote-footer">
            1.Marzo,2020
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
  </div>
  <div class="container">
    <hr class="lineas">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Amor de mi vida</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0 opcionesNav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Momentos Juntos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Secreto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <hr class="lineas">
  </div>

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