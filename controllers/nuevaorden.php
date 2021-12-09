<?php
include_once 'models/dashboard.php';

class Nuevaorden extends Controller{
    function __construct(){
        parent::__construct();
    }
    function render(){
        $productos = $this->model->getProducts();
        $this->view->productos = $productos;
        $this->view->render('nuevaorden/index');
    }
}

?>