<?php
include_once 'models/dashboard.php';

class DashboardModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    /**
     * *Estas tres funciones son para la parte de dashboard/mesas
     */
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
    public function searchTable($tbl_id){
        $query = $this->db->connect()->prepare("SELECT tbl_id FROM tbl_restaurante WHERE tbl_id = :tbl_id");
        try {
            $query->execute(['tbl_id'=> $tbl_id['tbl_id']]);
            $row = $query->fetch(PDO::FETCH_ASSOC);
            if ($row < 1) {
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
    /**
     * *Desde aqui comenzaran las funciones para dashboard/nuevaorden
     */
    public function getSelect(){
        $items= [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM tbl_restaurante WHERE NOT est_id=1 ORDER BY tbl_id ASC");
            while ($row = $query->fetch()) {
                $item = new Mesas();
                $item->tbl_id = $row['tbl_id'];
                $item->tbl_type = $row['tbl_type'];
                $item->est_id = $row['est_id'];
                //var_dump($item);
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }        
    }

    public function getImg ($item){
        $query = $this->db->connect()->prepare("SELECT * FROM tbl_menuCompleto WHERE menu_id = :menu_id");
        try {
            $query->execute(['menu_id' =>$item['menu_id']]);
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                echo $items = base64_encode($row['manuc_img']);
            }
            return true;   
        } catch (PDOException $e) {
            return false;
        }
    }
}

?>