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
    <title>Nueva orden </title>
</head>

<body>
    <?php require 'views/header.php'?>
    <div class="container ">
        <div class="btnNuevaorden">
            <button class="btn btn-info">Vista Previa</button>
            <button class="btn btn-success">Confirmar</button>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row rowMenu">
            <div class="col wrapMenu">
                <a href="#">
                    <img src="<?php echo constant('URL');?>public/img/hamburguesa.jpeg" alt="Hamburgeusa"
                        class="imgMenu">
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
        <hr>
    </div>
    <div class="oculto">
        <div class="container ">
            <h5 class="display-4">Hamburguesas</h5>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <?php 
                include_once 'models/dashboard.php';
                foreach ($this->productos as $row):
                    $productos = new Productos();
                    $productos = $row;
                    ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo constant('URL');?>public/img/<?php echo $productos->menuc_img;?>"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $productos->menuc_name; echo " $"; echo $productos->menuc_price;?></h5>
                        </div>
                    </div>
                </div>
                <?php endforeach?>
            </div>
        </div>
    </div>
    <?php require 'views/footer.php'?>
</body>

</html>