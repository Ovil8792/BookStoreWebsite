<?php
include_once "pdo.php";

class Chitiethoadon
{

    public $table = "chitiethoadon";

    public function thongTinHoaDon()
    {
        $sql = "SELECT * FROM $this->table";
        return pdo_query($sql);
    }

    public function getChiTietHoaDonByID($id_hoa_don)
    {
        $sql = "SELECT * FROM $this->table WHERE id_hoa_don = $id_hoa_don";
        return pdo_query_one($sql);
    }
}
