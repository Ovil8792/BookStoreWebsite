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
    
    // var_export($hoaDonChiTiet);
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
    function changeStatHD(){
        // echo $_POST['stat'];
        if(isset($_POST['stat'])){
            $stat = $_POST['stat'];
            $id=$_GET['id'];
            changeStat($id,$stat);
            echo "<script>alert('sửa thành công!')
            window.location='index.php?act=chitiethoadon&id=$id'
            </script>";
        }
    }