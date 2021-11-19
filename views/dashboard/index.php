<?php
    session_start();
    if (isset($_SESSION['sesion'])) {

    }else {
        header('Location: '. constant('URL'));
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <?php require 'views/header.php'?>
    <div class="container div-menu">
        <div class="div-menuCompleto">
            <h1 class="display-6">Menu Completo</h1>
        </div>
        <hr class="hr--small">
    </div>
    <div class="container">
        <div class="row rowMenu">
            <div class="col wrapMenu">
                <a href="#">
                <img src="<?php echo constant('URL');?>public/img/hamburguesa.jpeg" alt="Hamburgeusa" class="imgMenu">
                    <div class="infoMenu">
                        <h1 class="display-6">Hamburguesa</h1>
                    </div>
                </a>
            </div>
            <div class="col wrapMenu">
                <a href="#">
                    <img src="<?php echo constant('URL');?>public/img/cortes.jpeg" alt="Cortes" class="imgMenu">
                    <div class="infoMenu">
                        <h1 class="display-6">Cortes</h1>
                    </div>
                </a>
            </div>
            <div class="col wrapMenu">
                <a href="#">
                    <img src="<?php echo constant('URL');?>public/img/sopas.jpeg" alt="Cortes" class="imgMenu">
                    <div class="infoMenu">
                        <h1 class="display-6">Sopas</h1>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row rowMenu">
            <div class="col wrapMenu">
                <a href="#">
                    <img src="<?php echo constant('URL');?>public/img/pizza.jpeg" alt="Hamburgeusa" class="imgMenu">
                    <div class="infoMenu">
                        <h1 class="display-6">Pizza's</h1>
                    </div>
                </a>
            </div>
            <div class="col wrapMenu">
                <a href="#">
                    <img src="<?php echo constant('URL');?>public/img/ensalada.jpeg" alt="Cortes" class="imgMenu">
                    <div class="infoMenu">
                        <h1 class="display-6">Ensaladas</h1>
                    </div>
                </a>
            </div>
            <div class="col wrapMenu ultimoWrapMenu">
                <a href="#">
                    <img src="<?php echo constant('URL');?>public/img/tacos.jpeg" alt="Cortes" class="imgMenu">
                    <div class="infoMenu">
                        <h1 class="display-6">Tacos</h1>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php require 'views/footer.php'?>
</body>

</html>