<?php

class Nuevaorden extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function render(){
        $this->view->render('nuevaorden/index');
    }
    //TODO Implementar las funciones necesarias para la pagina
    
}

?>