<?php

include_once "pdo.php";


    

    function listHoaDon(){
        $sql = "SELECT * FROM hoadon";
        return pdo_query($sql);
    }

    function getHoaDonByID($id_nguoidung){
        $sql = "SELECT * FROM hoadon WHERE id_nguoidung = $id_nguoidung";
        return pdo_query_one($sql);
    }


