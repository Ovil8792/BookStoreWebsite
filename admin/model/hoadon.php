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
        $sql="SELECT * FROM chitiethoadon WHERE id_hoadon='$id'";
        return pdo_query($sql);
    }
function changeStat($id,$stat){
    $sql = "UPDATE hoadon SET tinhtrang = '$stat' WHERE id_hoa_don = $id";
    return pdo_execute($sql);
}



