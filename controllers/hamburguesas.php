<?php

class Hamburguesas extends Controller{
    function __construct(){
        parent::__construct();
    }
    function render(){
        $this->view->render('hamburguesas/index');
    }
}

?>
