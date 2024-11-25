<?php
include_once "../admin/model/chitiethoadon.php";
class ChiTietHoaDonCTL
{
    public function HienCTHD()
    {
        $cthd = new ChiTietHoaDon();
        $ListCTHD = $cthd->thongTinHoaDon();
        return $ListCTHD;
    }

    public function ShowCTHD(): array
    {
        $chitiethoadon=[];
        if (isset($_GET['id_hoa_don'])) {
            $id_hoa_don = $_GET['id_hoa_don'];
            $cthd = new ChiTietHoaDon();
            $chitiethoadon = $cthd->getChiTietHoaDonById($id_hoa_don);
        }
        return $chitiethoadon;
    }
}
