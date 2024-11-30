<?php
include_once $_SERVER['DOCUMENT_ROOT']."/model/sanpham.php";
$listGH= $_SESSION['gioHang'];
// var_export($listGH);
foreach($listGH as $key =>$i){
    $SPinfo = getSPById($i['id']);
    $listGH[$key]['ten_sp'] = $SPinfo['ten_sp'];
    $listGH[$key]['gia'] = $SPinfo['gia'];
    $listGH[$key]['anh_sp'] = $SPinfo['anh_sp'];
}

include_once $_SERVER['DOCUMENT_ROOT']."/view/cart/index.php";