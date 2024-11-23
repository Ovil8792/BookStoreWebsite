<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location: dangnhap.php');
    exit();  
}else{
    



include_once "./view/layouts/header.php";

include_once "controller/DanhMuc.php";
include_once "./model/pdo.php";
include_once "./controller/DanhMuc.php";
include_once "./controller/DashBoard.php";
include_once "./controller/SanPham.php";

include_once "./model/danhmuc.php";

$DMC = new DanhMucCTL();
$SP = new SPCTL();

if (isset($_GET['act']) && $_GET['act'] != '') {
    $action = $_GET['act'];
    switch($action) {
        case "danhmuc":
            
            include_once "./view/danhmuc/index.php";
            break;
        case "listdanhmuc":
            $DMC->listDaMu();
            break;
        case "adddanhmuc":
            include_once "./view/danhmuc/add.php";
            break;
        case 'adddm':
            $DMC->AddDM();
            break;
        case "suadanhmuc":
            include_once "./view/danhmuc/edit.php";
            break;
        case "suadm":
            $DMC->SuaDM();
            break;
        case "sanpham":
            include_once "./view/sanpham/index.php";
            break;
        case "addsanpham":
            include_once "./view/sanpham/add.php";
            break;
        case "delsp":
            $SP->delSP();
            break;
        case "addsp":
            $SP->addSP();
            break;
        case "editsp":
            include_once "./view/sanpham/edit.php";
            break;
        case "suaSP":
            $SP->editSP();
            break;
        case "uploadPage":
            include_once "./view/upload.php";
            break;
        case "upload":
            $SP->fileTransfer();
            break;
        case "taikhoan":
            include_once "./view/taikhoan/index.php";
            break;
        case "binhluan":
            include_once "./view/binhluan/index.php";
            break;
    }
} else {
    include_once 'view/dashboard/index.php';
}
include_once "./view/layouts/footer.php";
 }