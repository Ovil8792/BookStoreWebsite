<?php
include_once "pdo.php";
function getBLbyIdSP($idsp){
    $sql="SELECT * FROM binhluan WHERE id_sanpham='$idsp'";
    return pdo_query($sql);
}