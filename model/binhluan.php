<?php
include_once "pdo.php";
function getBLbyIdSP($idsp){
    $sql="SELECT * FROM binhluan WHERE id_sanpham='$idsp'";
    return pdo_query($sql);
}
function commenting($idsp,$idtk,$content,$danhgia,$cmttime){
    $sql="INSERT INTO binhluan(id_sanpham,id_taikhoan,noidung,danhgia,ngaytao) VALUES ('$idsp','$idtk','$content','$danhgia','$cmttime')";
    return pdo_execute($sql);
}