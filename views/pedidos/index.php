<?php
session_start();

if (isset($_SESSION['sesion'])) {
    /*
    * TODO Se agregaria una opciones si es que tiene la sesion iniciada 
    */
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
    <title>Pedidos</title>
</head>
<body>
    <?php require 'views/header.php';?>

    <div class="container div-menu">
        <div class="div-menuCompleto">
            <h1 class="display-6">Pedidos</h1>
        </div>
        <hr class="hr--small">
    </div>
    <div class="container spaceFooter">
        <div class="row rowMenu">
            <div class="col wrapMenu">
                <a href="<?php echo constant('URL');?>nuevaorden">
                <img src="<?php echo constant('URL');?>public/img/nuevaOrden.jpeg" alt="Hamburgeusa" class="imgMenu">
                    <div class="infoMenu">
                        <h1 class="display-6">Nueva Orden</h1>
                    </div>
                </a>
            </div>
            <div class="col wrapMenu">
                <a href="<?php echo constant('URL');?>pedidosenlinea">
                    <img src="<?php echo constant('URL');?>public/img/pedidoEnLinea.jpeg" alt="Cortes" class="imgMenu">
                    <div class="infoMenu">
                        <h1 class="display-6">Pedidos en linea</h1>
                    </div>
                </a>
            </div>
            <div class="col wrapMenu">
                <a href="<?php echo constant('URL');?>ordenesactivas">
                    <img src="<?php echo constant('URL');?>public/img/proceso.jpeg" alt="Cortes" class="imgMenu">
                    <div class="infoMenu">
                        <h1 class="display-6">Ordenes activas</h1>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php require 'views/footer.php';?>
</body>
</html>