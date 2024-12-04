<?php
include_once $_SERVER['DOCUMENT_ROOT']."/model/sanpham.php";

if(isset($_SESSION['gioHang']) && !empty($_SESSION['gioHang'])){
    $listgiohang = $_SESSION['gioHang'];
    $tongtien = 0;
    foreach($listgiohang as $key=> $item){
        $CTSP = getSPById($item['id']);
        $listgiohang[$key]['ten_sp']= $CTSP['ten_sp'];
        $listgiohang[$key]['gia'] = $CTSP['gia'];
        $listgiohang[$key]['anh_sp'] = $CTSP['anh_sp'];
        $tongtien += $CTSP['gia'] * $item['soLuong'];
    }
}else {
    echo "<script>alert('Giỏ hàng đang trống'); window.location.href = 'index.php';</script>";
}

include_once $_SERVER['DOCUMENT_ROOT']."/view/cart/checkout.php";