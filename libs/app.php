<?php

require_once 'controllers/error.php';

class App{
    function __construct(){
        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/'); 
        $url = explode('/', $url);
        
//      Entra a main cuando la pagina comienza sin definir un controlador
        if (empty($url[0])) {
            $archivoControlador = 'controllers/main.php';
            require_once $archivoControlador;
            $controlador = new Main();
            $controlador->cargarModelo('main');
            $controlador->render();
            return false;
        }
/**
 *      Verifica que el archivo controllador exista, posteriormente valida que el metodo existe dentro de algun
 *      archivo de caso contrario nos mandara un fatal erro
 */
        $archivoControlador = 'controllers/' . $url[0] . '.php';
        
        if (file_exists($archivoControlador)) {
            require_once $archivoControlador; 
            $controlador = new $url[0];
            $controlador->cargarModelo($url[0]);

            //numero de elementos del arreglo
            $nparam = sizeof($url);
            if ($nparam > 1) {
                if ($nparam > 2) {
                    $paranm = [];
                    for ($i=2; $i < $nparam; $i++) { 
                        array_push($param, $url[$i]);
                    }
                    $controlador->{$url[1]}($param);
                }else {
                    $controlador->{$url[1]}();
                }
            }else {
                $controlador->render();
            }
        }else {
            $error = new ErrorControlador();
        }
    }
}

?>