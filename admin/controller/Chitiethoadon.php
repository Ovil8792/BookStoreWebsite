<?php
include_once $_SERVER['DOCUMENT_ROOT']."/admin/model/chitiethoadon.php";

     function HienCTHD()
    {

        $ListCTHD = thongTinHoaDon();
        return $ListCTHD;
    }

     function ShowCTHD(): array
    {
        $chitiethoadon=[];
        if (isset($_GET['id_hoa_don'])) {
            $id_hoa_don = $_GET['id_hoa_don'];
    
            $chitiethoadon = getChiTietHoaDonById($id_hoa_don);
        }
        return $chitiethoadon;
    }

