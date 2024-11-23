<?php
include_once "../admin/model/binhluan.php";
class BinhLuanCTL
{
    public function HienBL()
    {
        $bl = new BinhLuan();
        $ListBL = $bl->listBinhLuan();
        return $ListBL;
    }

    public function ShowBL()
    {
        if (isset($_GET['id_sanpham'])) {
            $id_sanpham = $_GET['id_sanpham'];
            $bl = new BinhLuan();
            $binhluan = $bl->getBinhLuanById($id_sanpham);
        }
        return $binhluan;
    }

    public function anBinhLuan()
    {
        if (!isset($_GET['id_sanpham'])) {
            echo "id not found";
            die;
        }
        $id_sanpham = $_GET['id_sanpham'];
        $bl = new BinhLuan();

    }
}
