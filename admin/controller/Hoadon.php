<?php
include_once $_SERVER['DOCUMENT_ROOT']."/admin/model/hoadon.php";

     function HienHD()
    {
        
        $listhd = listHoaDon();
        require_once $_SERVER['DOCUMENT_ROOT']."/admin/view/hoadon/index.php";
    }

     function ShowHD()
    {
        if (isset($_GET['id_nguoidung'])) {
            $id_nguoidung = $_GET['id_nguoidung'];
            
            $hoadon = getHoaDonById($id_nguoidung);
        }
        
    }
