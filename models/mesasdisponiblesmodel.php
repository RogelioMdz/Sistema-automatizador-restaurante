<?php
include_once 'models/dashboard.php';

class MesasdisponiblesModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function getTable(){
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM tbl_restaurante");

            while ($row = $query->fetch()) {
                $item = new Mesas();
                $item->tbl_id = $row['tbl_id'];
                $item->tbl_type = $row['tbl_type'];
                $item->tbl_chair = $row['tbl_chair'];
                $item->est_id = $row['est_id'];
                //var_dump($item);
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }
    public function searchTable($datos){
        $query = $this->db->connect()->prepare("SELECT tbl_id FROM tbl_restaurante WHERE tbl_id = :tbl_id");
        try {
            $query->execute(['tbl_id'=> $datos['tbl_id']]);
            $row = $query->fetch(PDO::FETCH_ASSOC);
            if ($row < 1) {
                $query2 = $this->db->connect()->prepare("UPDATE tbl_employee SET status_id = 3 WHERE employee_id = :employee_id");
                $query2->execute(['employee_id' => $datos['employee_id']]);
                $row2 = $query2->rowCount();
                return false;
            }else {
                //print_r($row);
                return true;
            }
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    public function updateStatusTable($item){
        try {
            $query = $this->db->connect()->prepare("UPDATE tbl_restaurante SET est_id = :est_id WHERE tbl_id = :tbl_id");
            $query->execute(['tbl_id' => $item['tbl_id'], 'est_id' => $item['est_id']]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}

?>