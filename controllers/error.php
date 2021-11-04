<?php
/**
 *  el mensaje de error que aparece puede ser mensaje dinamico si se necesita
 *  todo se maneja mediante el controlador controller es por eso que se le creo la extension 
 *  al archivo y se manda a llamar su constructor
 */
class ErrorControlador extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Not Found 404"; 
        $this->view->render('error/index');
        error_log('Error::construct-> Inicio de errores');
        
    }
}
?>