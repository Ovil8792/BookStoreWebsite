<?php
include_once 'pdo.php';

function listDanhMuc()
{
    $sql = "select * from danh_muc";
    return pdo_query($sql);
}
function addDanhMuc($name)
{
    $sql = "INSERT INTO danh_muc (ten_danh_muc) VALUES ('$name')";
    return pdo_execute($sql);
}
function ShowDMById($id)
{
    $sql = "SELECT * FROM danh_muc WHERE id_danh_muc = '$id'";
    return pdo_query_one($sql);
}

function SuaDanhMuc($id, $name)
{
    $sql = "UPDATE danh_muc SET ten_danh_muc = '$name' WHERE id_danh_muc = '$id'";
    return pdo_execute($sql);
}
function AnDM($id){
    $sql= "UPDATE danh_muc SET stat=0 WHERE id_danh_muc=$id";
    return pdo_execute($sql);
}
function HienDM($id){
    $sql= "UPDATE danh_muc SET stat=1 WHERE id_danh_muc=$id";
    return pdo_execute($sql);
}
