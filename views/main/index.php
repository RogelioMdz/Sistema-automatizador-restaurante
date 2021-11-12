<?php
    session_start();
    if (isset($_SESSION['sesion']))  {
        header('Location: ' . constant('DASH'));
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- La constante URL viene desde el archivo config/congfig.php -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">

    <!-- Css -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">

    <!-- sweertAlert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Logeo</title>
</head>

<body id="bodylogin">
    <div id="box" class="box">
        <img class="imgLogin" src="<?php echo constant('URL'); ?>public/img/login.jpeg" alt="restaurante">
        <form action="POST" id="formLogin" class="formLogin">
            <div id="items" class="mb-3 formOption text-center">
                <div id="wrap" class="wrap">
                    <div class="widget">
                        <div class="fecha">
                            <p id="diaSemana" class="diaSemana"></p>
                            <p id="dia"></p>
                            <p>de</p>
                            <p id="mes" class="mes"></p>
                            <p>del</p>
                            <p id="year" class="year"></p>
                        </div>
                        <div class="reloj">
                            <p id="horas" class="horas"></p>
                            <p>:</p>
                            <p id="minutos" class="minutos"></p>
                            <p>:</p>
                            <div class="caja-segundos">
                                <p id="ampm" class="ampm"></p>
                                <p id="segundos" class="segundos"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="form-title">Bienvenido </h2>
            </div>
            <div id="items" class="mb-3  formOption">
                <input required type="text" class="form-control" name="employee_id" id="employee_id"
                    placeholder="Coloca tu ID">
                <i class="fas fa-user" aria-hidden="true"></i>
                <span class="form-line"></span>
            </div>
            <div id="items" class="mb-3  formOption">
                <input required type="password" class="form-control" name="employee_key" id="employee_key"
                    placeholder="Clave de acceso">
                <i class="fas fa-key" aria-hidden="true"></i>
                <!-- funcion para convertir la contraseÃ±a a texto y viceversa  -->
                <span class="form-line"></span>
                <!-- se muestran los requisitos de la contraseÃ±a -->
            </div>
            <div id="items" class="mb-3  formOption text-center formLinks">
            <a href="#" class="olvidePass"><p>¿Olvidaste la Contraseña?</p></a>    
            <button name="validar" class="btn btn-center btnLogueo" type="submit" data-bs-dismiss="modal">Ingresar</button>
            </div>
        </form>
    </div>
    <div id="loader" class="loader"></div>

    <!-- jquery-->
    <script src="<?php echo constant('URL'); ?>public/js/jquery-3.6.0.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo constant('URL'); ?>public/js/bootstrap.min.js"></script>
    <!-- jqueryValidate -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
    <!-- funcion para registrar -->
    <script src="<?php echo constant('URL'); ?>public/js/reloj.js"></script>
    <script src="<?php echo constant('URL'); ?>public/ajax/mainajax.js"></script>
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/33cbed8d12.js" crossorigin="anonymous"></script>

</body>

</html>