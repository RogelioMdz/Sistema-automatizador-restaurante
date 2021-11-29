<?php

class Mesasdisponibles extends Controller{
    public function __construct(){
        parent::__construct();
        $this->view->mesas = [];
    }
    function render(){
        $mesas = $this->model->getTable();
        $this->view->mesas = $mesas;
        $this->view->render('mesasdisponibles/index');
    }

    function asignarMesa(){
        $tbl_id = $_POST['tbl_id'];
        $est_id = $_POST['est_id'];
        $employee_id = $_POST['employee_id'];

        if ($this->model->searchTable(['tbl_id' => $tbl_id, 'employee_id' => $employee_id])) {
            if ($this->model->updateStatusTable(['tbl_id' => $tbl_id, 'est_id'=> $est_id])) {
                echo "0";
            }else {
                echo "2";
            }
        }else {
            echo "1";
        }
    }
}

?>