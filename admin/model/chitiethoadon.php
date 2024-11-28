<?php
include_once "pdo.php";



    $table = "chitiethoadon";

    function thongTinHoaDon()
    {
        $sql = "SELECT * FROM chitiethoadon";
        return pdo_query($sql);
    }

    function getChiTietHoaDonByID($id_hoa_don)
    {
        $sql = "SELECT * FROM chitiethoadon WHERE id_hoa_don = $id_hoa_don";
        return pdo_query_one($sql);
    }

