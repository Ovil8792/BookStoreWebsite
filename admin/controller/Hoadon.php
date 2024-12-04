<?php
include_once $_SERVER['DOCUMENT_ROOT']."/admin/model/hoadon.php";
include_once $_SERVER['DOCUMENT_ROOT']."/admin/model/sanpham.php";

function getCTHD(){
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hoaDonChiTiet = getHoaDonById($id);
    $hoaDonInfo = AllCTHD($id);
    foreach ($hoaDonInfo as $key => $value) {
        $sanPhamInfo = getById($value['id_sp']);
        $hoaDonInfo[$key]['ten_sp'] = $sanPhamInfo['ten_sp'];
        $hoaDonInfo[$key]['anh_sp'] = $sanPhamInfo['anh_sp'];
    }
    //kéo sang view sp,cthd ở admin
    include_once $_SERVER['DOCUMENT_ROOT']."/admin/view/chitiethoadon/index.php";
}
}
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
