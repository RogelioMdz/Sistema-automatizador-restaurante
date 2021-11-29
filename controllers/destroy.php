<?php

session_start();

session_unset();

session_destroy();

define('URL', 'http://localhost:8080/Sistema-automatizador-restaurante/');
header('Location:'. constant('URL'));

?>
