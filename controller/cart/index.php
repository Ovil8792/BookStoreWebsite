<?php
include_once $_SERVER['DOCUMENT_ROOT']."/model/sanpham.php";
if(isset($_SESSION['gioHang'])){
$listGH= $_SESSION['gioHang'];
$tong=0;
foreach($listGH as $key =>$i){
    $SPinfo = getSPById($i['id']);
    $listGH[$key]['ten_sp'] = $SPinfo['ten_sp'];
    $listGH[$key]['gia'] = $SPinfo['gia'];
    $listGH[$key]['anh_sp'] = $SPinfo['anh_sp'];
    $tong+=$SPinfo['gia'] *$i['soLuong'];
}

}else{
    echo "<script>alert('Giỏ hàng đang trống'); window.location = 'index.php';</script>";
}
include_once $_SERVER['DOCUMENT_ROOT']."/view/cart/index.php";