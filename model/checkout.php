<?php
include_once "pdo.php";

function addCO($id_user,$ten,$sdt,$diachi,$email,$total,$now,$pttt,$status){
    $thanhtoan = $total+20000;
    $sql="INSERT INTO hoadon (id_nguoidung,ho_ten,so_dt,dia_chi,email,total,create_at,phuongthucthanhtoan,tinhtrang) VALUES ('$id_user','$ten','$sdt','$diachi','$email','$thanhtoan','$now','$pttt','$status')";
    return pdo_execute_return_id($sql);
}

function addCTHD($id_hoa_don,$id_sp,$soluong,$gia){
    $sql="INSERT INTO chitiethoadon (id_hoadon,id_sp,soluong,gia) VALUES ('$id_hoa_don','$id_sp','$soluong','$gia')";
    return pdo_execute($sql);
}
function Cli_HD(){
    $userID = $_SESSION['user'][0];
}