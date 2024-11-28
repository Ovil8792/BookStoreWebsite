<?php
include_once 'pdo.php';
class danhmuc{
    public $table = 'danh_muc';

public function listDanhMuc()
{
    $sql = "select * from $this->table";
    return pdo_query($sql);
}
public function addDanhMuc($name)
{
    $sql = "INSERT INTO $this->table (ten_danh_muc) VALUES ('$name')";
    return pdo_execute($sql);
}
public function ShowDMById($id)
{
    $sql = "SELECT * FROM $this->table WHERE id_danh_muc = '$id'";
    return pdo_query_one($sql);
}

public function SuaDanhMuc($id, $name)
{
    $sql = "UPDATE $this->table SET ten_danh_muc = '$name' WHERE id_danh_muc = '$id'";
    return pdo_execute($sql);
}
public function AnDM($id){
    $sql= "UPDATE $this->table SET stat=0 WHERE id_danh_muc=$id";
    return pdo_execute($sql);
}
public function HienDM($id){
    $sql= "UPDATE $this->table SET stat=1 WHERE id_danh_muc=$id";
    return pdo_execute($sql);
}
}