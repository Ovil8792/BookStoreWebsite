<!DOCTYPE html>
<html lang="en">

<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/controller/sanpham/SanPham.php";
//hienSP();
require_once "./view/layout/header.php";
echo "<p style='margin-top:200px;'></p>";






if (isset($_GET['act']) && $_GET['act'] != '') {
    $action = $_GET['act'];
    switch($action) {
        case "cart":
            include_once $_SERVER['DOCUMENT_ROOT']."/controller/cart/index.php";
            break;
        case "addToCart":
            include_once $_SERVER['DOCUMENT_ROOT']."/controller/cart/add.php";
            break;
        case "shop":
            include_once $_SERVER['DOCUMENT_ROOT']."/controller/shop/index.php";

            break;
        case "ctsp":
            showSPById();
            break;
    }
}else{
include_once $_SERVER['DOCUMENT_ROOT']."/view/home/home.php";

    }



require_once "./view/layout/footer.php";
?>

</html>