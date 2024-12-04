<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/model/DanhMuc.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/model/sanpham.php";
function SPByDM()
{
    $dsDM = getDM();
    $DMD = getDMById($_GET['id']);
    $sp = getSPByDM($_GET['id']);
    if (isset($_SESSION['gioHang']) && !empty($_SESSION['gioHang'])) {
        function ItemInGH()
        {
            if (isset($_SESSION['gioHang']) && !empty($_SESSION['gioHang'])) {
                return count($_SESSION['gioHang']);
            }
            return 0;
        }
        $slSP = ItemInGH();
    } else {
        $slSP = 0;
    }
    include_once $_SERVER['DOCUMENT_ROOT'] . "/view/category/index.php";
}