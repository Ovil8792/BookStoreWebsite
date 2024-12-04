<?php

include_once "pdo.php";
    function listHoaDon(){
        $sql = "SELECT * FROM hoadon";
        return pdo_query($sql);
    }

    function getHoaDonByID($id){
        $sql = "SELECT * FROM hoadon WHERE id_hoa_don = $id";
        return pdo_query_one($sql);
    }

    function AllCTHD($id){
        $sql="SELECT * FROM chitiethoadon WHERE id='$id'";
        return pdo_query($sql);
    }




