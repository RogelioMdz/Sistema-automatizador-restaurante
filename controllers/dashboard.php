<?php

class Dashboard extends Controller{
    public function __construct(){
        parent::__construct();
        $this->view->mesas = [];
        $this->view->nuevaorden = [];
    }

    function render(){
        $this->view->render('dashboard/index');
    }
    
}

?>