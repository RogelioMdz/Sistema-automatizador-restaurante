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

    function mesas($param = null){
        $mesas = $this->model->getTable();
        $this->view->mesas = $mesas;
        $this->view->render('dashboard/mesas');
    }
    function nuevaorden($param = null){
        $nuevaorden = $this->model->getSelect();
        $this->view->nuevaorden = $nuevaorden;
        $this->view->render('dashboard/nuevaorden');
    }

    function asignarMesa(){
        $tbl_id = $_POST['tbl_id'];
        $est_id = $_POST['est_id'];

        if ($this->model->searchTable(['tbl_id' => $tbl_id])) {
            if ($this->model->updateStatusTable(['tbl_id' => $tbl_id, 'est_id'=> $est_id])) {
                echo "0";
            }else {
                echo "2";
            }
        }else {
            echo "1";
        }
    }

    function getMenuComplet(){
        $menu_id = $_GET['menu_id'];
//        $menu_name = $_GET['menu_name'];

        if($this->model->getImg(['menu_id' => $menu_id])){
            echo "ok";
        }else {
            echo "1";
        }
    }
    
}

?>