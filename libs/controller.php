<?php
/**
 *  obtiene la vista del archvio view.php 
 */
class Controller{
    function __construct(){
        $this->view = new View();
    }
    function cargarModelo($model){
        $url = 'models/'.$model.'model.php';
        if (file_exists($url)) {
            require $url;
            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }
    function postExist ($params){
        foreach ($params as $param) {
            if (!isset($_POST[$param])) {
                error_log('CONTROLLER::postExist -> No existe el parametro ' . $param);
                return false;
            }
        }
        return true;
    }
    function getExist ($params){
        foreach ($params as $param) {
            if (!isset($_GET[$param])) {
                error_log('CONTROLLER::getExist -> No existe el parametro ' . $param);
                return false;
            }
        }
        return true;
    }

    function postGet($name){
        return $_POST[$name];
    }
    function getGet($name){
        return $_GET[$name];
    }

    function redirect($ruta, $mensajes){
        $data = [];
        $params = '';

        foreach ($mensajes as $key => $mensaje ) {
            array_push($data, $key. ' = ' . $mensaje);   
        }
        $params = join('&', $data);

        if ($params != '') {
            $params = '?' . $params;
        }

        header('Location: ' . constant('URL') . $ruta . $params);
    }
}

?>