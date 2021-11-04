<?php
/**
 *  Obtiene la conexion a la base de datos
 */
class Model{
    function __construct(){
        $this->db = new Database();
    }
    //Con esta funcion se evita escribir desde el this
    function query($query){
        return $this->db->connect()->query($query);
    }
    function prepare($query){
        return $this->db->connect()->query($query);
    }

}

?>