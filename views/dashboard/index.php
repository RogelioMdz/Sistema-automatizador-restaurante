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
    <?php if ($_SESSION['rol_id'] == 3):?>
    <marquee behavior="" direction="left">Que tenga excelente dia!, recuerda tratrar con respeto a los clientes
    </marquee>
    <?php endif;?>
    <div class="container">
        <div class="row ">
            <div class="card mb-3 mx-auto bg-light text-dark border-primary card-principal" style="max-width: 740px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo constant('URL');?>public/img/mesa.png" class="img-fluid rounded-start"
                            alt="buscar mesa">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Mesa disponible</h5>
                            <p class="card-text">Aqui encontraras las mesas disponibles con su numero de sillas
                                para que asignes correctamente al cliente con los asientos necesarios.</p>
                            <div class="col text-center">
                                <button class="btnDash btnBuscar"><a class="enlaceMesa" href="<?php echo constant('URL');?>dashboard/mesas">Buscar</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 mx-auto bg-light text-dark border-success card-principal" style="max-width: 740px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo constant('URL');?>public/img/pedido.png" class="img-fluid rounded-start"
                            alt="nueva orden">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Tomar orden</h5>
                            <p class="card-text">Toma la orden con las especificaciones que te de el cliente.</p>
                            <div class="col text-center">
                                <button class="btnDash btnNOrden"><a class="enlaceMesa" href="<?php echo constant('URL');?>dashboard/nuevaorden">Nueva orden</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 mx-auto bg-light text-dark border-secondary card-principal" style="max-width: 740px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo constant('URL');?>public/img/pedido_linea.png" class="img-fluid rounded-start"
                            alt="nueva orden">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Pedido en Linea</h5>
                            <p class="card-text">Aqui deberas revisar los pedidos que se hayan solicitado en linea, para 
                                posteriormente generar la orden y mandarlo a cocina
                            </p>
                            <div class="col text-center">
                                <button class="btnDash btnLinea">Revisar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if($_SESSION['rol_id'] == 1 || $_SESSION['rol_id'] == 2):?>
            <div class="card mb-3 mx-auto bg-light text-dark border-danger card-principal" style="max-width: 740px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo constant('URL');?>public/img/incidencia.png" class="img-fluid rounded-start"
                            alt="incidencia">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Generar incidencia</h5>
                            <p class="card-text">Sucedio algo con algun cliente, explicande breve pero concisamente lo que paso</p>
                            <div class="col text-center">
                                <button class="btnDash btnNIncidencia">Nueva incidencia </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
    <?php require 'views/footer.php'?>
</body>

</html>