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
    
    function accessEmployee(){
        $employee_id = $_POST['employee_id'];
        $employee_key = $_POST['employee_key'];

        if ($this->model->existTable()) {
            if ($this->model->existEmployee(['employee_id'=> $employee_id])) {
                if ($this->model->activeEmployee(['employee_id' => $employee_id])) {
                    if ($this->model->keyEmployee(['employee_id' => $employee_id])) {
                        session_start();
                        $_SESSION['sesion'] = $employee_id;
                        $_SESSION['name_user'] = $this->model->getName(['employee_id' => $employee_id]);
                        $_SESSION['surname_user'] = $this->model->getSurname(['employee_id' => $employee_id]);
                        $_SESSION['rol_id'] = $this->model->getRol(['employee_id' => $employee_id]);
                        //echo $_SESSION['name_user'];
                        echo "0";
                    }else {
                        echo "3";
                        error_log('ACCESSDENIELD::employee-> La contraseña es incorrecta del empleado' . " " . $employee_id);
                    }
                }else {
                    echo "4";
                    error_log('ACCESSDENIELD::employee-> El usuario se encuentra bloqueado, por actulizar datos dentro de la pagina');
                }
            }else{
                echo "2";
                error_log("FATAL::server->La base de datos presenta una falla");
            }
        }else{
            echo "1";
            error_log("FATAL::server->La tabla no existe");
        }
    }

}

?>