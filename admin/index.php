<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location: dangnhap.php');
    exit();  
}else{
    



include_once "./view/layouts/header.php";
 include_once "./controller/DanhMuc.php";
// include_once "./controller/DashBoard.php";
 include_once "./controller/SanPham.php";
include_once $_SERVER['DOCUMENT_ROOT']."/admin/controller/Binhluan.php";
include_once $_SERVER['DOCUMENT_ROOT']."/admin/controller/Hoadon.php";
include_once $_SERVER['DOCUMENT_ROOT']."/admin/controller/DashBoard.php";
include_once "./controller/User.php";

include_once "./controller/Hoadon.php";



if (isset($_GET['act']) && $_GET['act'] != '') {
    $action = $_GET['act'];
    switch($action) {
        case "danhmuc":
            listDaMu();
            break;
        case "adddanhmuc":
            include_once $_SERVER['DOCUMENT_ROOT']."/admin/view/danhmuc/add.php";
            break;
        case 'adddm':
            AddDM();
            break;
        case "suadanhmuc":
            hienSuaDM();
            break;
        case "suadm":
            SuaDM();
            break;
        case "sanpham":
            showSP();
            break;
        case "addsanpham":
            require_once $_SERVER['DOCUMENT_ROOT']."/admin/view/sanpham/add.php";
            break;
        case "delsp":
            delSP();
            break;
        case "addsp":
            addSP();
            break;
        case "editsp":
           ShowSuaSP();
           break;
        case "suaSP":
            editSP();
            break;
        // case "uploadPage":
        //     include_once "./view/upload.php";
        //     break;
        // case "upload":
        //     $SP->fileTransfer();
        //     break;
        case "taikhoan":
           showUser();
            break;
        case "binhluan":
           getBL();
            break;
        case "hoadon":
            HienHD();
            break;
        case "chitiethoadon":
            getCTHD();
            break;
        case "show":
           hienDaMu();
            break;
        case "hide":
            anDaMu();
            break;
    }
}
 else {
    dashboardShow();
}
include_once $_SERVER['DOCUMENT_ROOT']."/admin/view/layouts/footer.php";
 }
