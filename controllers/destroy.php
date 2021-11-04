<?php

session_start();

session_unset();

session_destroy();

define('URL', 'http://localhost:8888/Proyecto/');
header('Location:'. constant('URL'));

?>