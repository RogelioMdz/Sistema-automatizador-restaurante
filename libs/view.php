<?php

class View{
    function __construct(){
    }
/**
 *   Se declara como se solicitan las vistas
 */
    function render($nombre, $data = []){
        $this->d = $data;
        require 'views/' . $nombre . '.php';
    }

    
}

?>