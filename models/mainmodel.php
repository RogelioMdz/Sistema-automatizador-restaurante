<?php

class MainModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function existTable(){
        try {
            $query = $this->db->connect()->query("SELECT * FROM restaurante.tbl_rol");
            if ($row = $query->fetch() != 0) {
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }
    public function activeEmployee($datos){
        $query = $this->db->connect()->prepare("SELECT tbl_employeeStatus.status_id FROM tbl_employee INNER JOIN tbl_employeeStatus ON tbl_employee.status_id = tbl_employeeStatus.status_id WHERE employee_id = :employee_id");
        try {
            $query->execute(['employee_id' => $datos['employee_id']]);
            if($row = $query->fetchColumn() == 1) {
                return true;
            }else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }
    public function existEmployee($datos){
        $query = $this->db->connect()->prepare("SELECT tbl_rol.rol_id FROM  tbl_employee INNER JOIN tbl_rol ON tbl_employee.rol_id = tbl_rol.rol_id  WHERE employee_id = :employee_id");
        try {
            $query->execute(['employee_id'=> $datos['employee_id']]);
            if ($row = $query->fetch() > 0) {
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }
    public function keyEmployee($datos){
        $query = $this->db->connect()->prepare("SELECT employee_key FROM tbl_employee WHERE employee_id = :employee_id");
        try {
            $query->execute(['employee_id'=> $datos['employee_id']]);
            $row = $query->fetchColumn();
            $keydb = $row;
            $keyinput = $_POST['employee_key'];
            if ($keyinput == $keydb) {
                return true;
            }else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }
    public function getName($datos){
        $query = $this->db->connect()->prepare("SELECT * FROM tbl_employee WHERE employee_id = :employee_id");
        try {
            $query->execute(['employee_id'=> $datos['employee_id']]);
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $name = $row['employee_name'];
            }
            return $name;
        }catch(PDOException $e){
            return false;
        }
    }
    public function getSurname($datos){
        $query = $this->db->connect()->prepare("SELECT * FROM tbl_employee WHERE employee_id = :employee_id");
        try {
            $query->execute(['employee_id'=> $datos['employee_id']]);
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $surname = $row['employee_surname'];
            }
            return $surname;
        }catch(PDOException $e){
            return false;
        }
    }
    public function getRol($rol){
        $query = $this->db->connect()->prepare("SELECT * FROM tbl_employee WHERE employee_id = :employee_id");
        try {
            $query->execute(['employee_id'=> $rol['employee_id']]);
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $rolUser = $row['rol_id'];
            }
            return $rolUser;
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>