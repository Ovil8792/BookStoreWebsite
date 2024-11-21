<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location: login.php');
    exit();  
}else{
    
}


include_once "./view/layouts/header.php";

include_once "controller/DanhMuc.php";
include_once "./model/pdo.php";
include_once "./controller/DanhMuc.php";
include_once "./controller/DashBoard.php";  
include_once "./model/danhmuc.php";

$DMC = new DanhMucCTL();

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
    }
} else {
    include_once 'view/dashboard/index.php';
}
include_once "./view/layouts/footer.php";