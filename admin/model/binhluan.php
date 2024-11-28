<?php
include_once "pdo.php";


    function listBinhLuan(){
        $sql = "SELECT * FROM binhluan";
        return pdo_query($sql);
    }

    function getBinhLuanByID($id_sanpham){
        $sql = "SELECT * FROM binhluan WHERE id_sanpham = $id_sanpham";
        return pdo_query_one($sql);
    }

    function anBinhLuan($id_sanpham){
        $sql = "SELECT * FROM binhluan WHERE id_sanpham = $id_sanpham";
        return pdo_query_one($sql);
    }


?>