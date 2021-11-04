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
    <title>Nueva Orden</title>
</head>

<body>
    <?php require 'views/header.php';?>
    <div class="container" id="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="imgOpciones">
                <a href="<?php echo constant('URL'); ?>dashboard"><img class="MesaImgInicio"
                        src="<?php echo constant('URL'); ?>public/img/home.png" class="card-img-top" alt="home"></a>
            </div>
            <div class="imgOpciones">
                <a href="<?php echo constant('URL'); ?>dashboard/pedidoenlinea"><img class="MesaImgPedidoLinea"
                        src="<?php echo constant('URL'); ?>public/img/pedido_linea.png" class="card-img-top"
                        alt="pedido en linea"></a>
            </div>
            <div class="imgOpciones">
                <a href="<?php echo constant('URL'); ?>dashboard/mesas"><img class="MesaImgPedido"
                        src="<?php echo constant('URL'); ?>public/img/mesa.png" class="card-img-top" alt="orden"></a>
            </div>
        </div>
    </div>
    <!-- <div class="container">
        <label for="" id="lb_nuevaorden" class="lb_nuevaorden">Selecciona a que mesa correspondera el pedido</label>
        <select class="form-select mesaSelect" aria-label="Default select example" name="mesaSelect" id="mesaSelect">
            <option disabled selected>Ver opciones</option>
            <?php 
                    include_once 'models/dashboard.php';
                    foreach ($this->nuevaorden as $row):
                        $nuevaorden = new Mesas();
                        $nuevaorden = $row;
            ?>
            <option id="<?php echo $nuevaorden->tbl_id;?>" value="">
                <?php echo $nuevaorden->tbl_type; echo " ";?><?php echo $nuevaorden->tbl_id?></option>
            <?php endforeach;?>
        </select>
    </div> -->
    <div class="container">
        <div class="row row-cols-4">
            <div class="col">
                <div class="fondo-menu" style="width: 10rem;">
                    <a href="<?php echo constant('URL'); ?>dashboard/nuevaorden?menu_id=1" onclick="getIdMenu();" id="getHam">
                        <img src="<?php echo constant('URL'); ?>public/img/hamburguesas.png" class="card-img-top"
                            alt="Hamburguesa">
                    </a>
                    <div class="cuerpo-menu">
                        <a href="">
                            <h6 class="titulo-menu">Hamburguesas</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="fondo-menu" style="width: 10rem;">
                    <a href="" onclick="getIdMenu();" id="getEns">
                        <img src="<?php echo constant('URL'); ?>public/img/ensalada.png" class="card-img-top"
                            alt="Ensalada">
                    </a>
                    <div class="cuerpo-menu">
                        <a href="">
                            <h6 class="titulo-menu">Ensaladas</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="fondo-menu" style="width: 10rem;">
                    <a href="" onclick="getIdMenu();" id="getCal">
                        <img src="<?php echo constant('URL'); ?>public/img/caldo.png" class="card-img-top" alt="Caldos">
                    </a>
                    <div class="cuerpo-menu">
                        <a href="">
                            <h6 class="titulo-menu">Caldos</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="fondo-menu" style="width: 10rem;">
                    <a href="" onclick="getIdMenu();" id="getCor">
                        <img src="<?php echo constant('URL'); ?>public/img/cortes.png" class="card-img-top"
                            alt="Cortes">
                    </a>
                    <div class="cuerpo-menu">
                        <a href="">
                            <h6 class="titulo-menu">Cortes</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="fondo-menu" style="width: 10rem;">
                    <a href="" onclick="getIdMenu();" id="getTac">
                        <img src="<?php echo constant('URL'); ?>public/img/tacos.png" class="card-img-top" alt="Tacos">
                    </a>
                    <div class="cuerpo-menu">
                        <a href="">
                            <h6 class="titulo-menu">Tacos</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="fondo-menu" style="width: 10rem;">
                    <a href="" onclick="getIdMenu();" id="getPos">
                        <img src="<?php echo constant('URL'); ?>public/img/postres.png" class="card-img-top"
                            alt="Postres">
                    </a>
                    <div class="cuerpo-menu">
                        <a href="">
                            <h6 class="titulo-menu">Postres</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="fondo-menu" style="width: 10rem;">
                    <a href="" onclick="getIdMenu();" id="getRef">
                        <img src="<?php echo constant('URL'); ?>public/img/refrescos.png" class="card-img-top"
                            alt="Refrescos">
                    </a>
                    <div class="cuerpo-menu">
                        <a href="">
                            <h6 class="titulo-menu">Refrescos</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="fondo-menu" style="width: 10rem;">
                    <a href="" onclick="getIdMenu();" id="getBar">
                        <img src="<?php echo constant('URL'); ?>public/img/bar.png" class="card-img-top" alt="Bar">
                    </a>
                    <div class="cuerpo-menu">
                        <a href="">
                            <h6 class="titulo-menu">Bar</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="menu">
        <div class="row">
            <?php 
                include_once 'models/dashboardmodel.php';
                
            ?>

        </div>
    </div>

    <?php require 'views/footer.php';?>
    <script src="<?php echo constant('URL'); ?>public/ajax/nuevaordenajax.js"></script>
</body>

</html>