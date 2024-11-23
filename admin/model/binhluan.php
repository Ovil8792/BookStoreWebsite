<?php
include_once "pdo.php";

class Binhluan{

    public $table = "binhluan";

    public function listBinhLuan(){
        $sql = "SELECT * FROM $this->table";
        return pdo_query($sql);
    }

    public function getBinhLuanByID($id_sanpham){
        $sql = "SELECT * FROM $this->table WHERE id_sanpham = $id_sanpham";
        return pdo_query_one($sql);
    }

    public function anBinhLuan($id_sanpham){
        $sql = "SELECT * FROM $this->table WHERE id_sanpham = $id_sanpham";
        return pdo_query_one($sql);
    }

}
?>