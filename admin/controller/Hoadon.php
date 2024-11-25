<?php
include_once "../admin/model/hoadon.php";
class HoaDonCTL
{
    public function HienHD()
    {
        $hd = new HoaDon();
        $ListHD = $hd->listHoaDon();
        return $ListHD;
    }

    public function ShowHD()
    {
        if (isset($_GET['id_nguoidung'])) {
            $id_nguoidung = $_GET['id_nguoidung'];
            $hd = new HoaDon();
            $hoadon = $hd->getHoaDonById($id_nguoidung);
        }
        return $hoadon;
    }
}
