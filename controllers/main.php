<?php
class Main extends Controller{
    function __construct(){
        parent::__construct();
    }

/**
 *  Esta funcion de render la obtendran todas para poder tener una vista a las carpeta
 *  views cada una tendra que tener su modulo
 */
    function render(){
        $this->view->render('main/index');
    }
}
?>