<?php

ini_set('ignore_repeated_errors', TRUE); // always use TRUE

ini_set('display_errors', FALSE); // Error/Exception display, use FALSE only in production environment or real server. Use TRUE in development environment

ini_set('log_errors', TRUE);
ini_set("error_log", "/Applications/MAMP/htdocs/Proyecto/php_error.log");
//ini_set("error_log", "/xampp/htdocs/Proyecto/php_error.log");
/**
 *  Se solicita el codigo de las librerias 
 */
require_once 'libs/controller.php';
require_once 'libs/view.php';
require_once 'libs/model.php';
require_once 'libs/app.php';
require_once 'libs/database.php';
require_once 'config/config.php';

$app = new App();

?>