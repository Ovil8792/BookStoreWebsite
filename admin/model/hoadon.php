<?php

include_once "pdo.php";

class Hoadon{

    public $table = "hoadon";

    public function listHoaDon(){
        $sql = "SELECT * FROM $this->table";
        return pdo_query($sql);
    }

    public function getHoaDonByID($id_nguoidung){
        $sql = "SELECT * FROM $this->table WHERE id_nguoidung = $id_nguoidung";
        return pdo_query_one($sql);
    }
}

