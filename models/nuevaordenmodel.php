<?php

class NuevaordenModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function getProducts(){
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM tbl_menucompleto");

            while ($row = $query->fetch()) {
                $item = new Productos();
                $item->menuc_id = $row['menuc_id'];
                $item->menuc_name = $row['menuc_name'];
                $item->menuc_price = $row['menuc_price'];
                $item->menuc_img = $row['menuc_img'];
                $item->menuc_category = $row['menuc_category'];
                //var_dump($item);
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }
}

?>