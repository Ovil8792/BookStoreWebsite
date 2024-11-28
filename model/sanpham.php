<?php

class SanPham{
    public $table = 'san_pham';
     
    public function listSP(){
        $sql = "SELECT * FROM $this->table";
        return pdo_query($sql);
    }
    public function add($name,$gia,$anhsp,$iddm,$tgia,$ngayxb,$tinhtrang){
        $sql="INSERT INTO $this->table VALUES (NULL,'$name','$gia','$anhsp','$iddm','$tgia','$ngayxb','$tinhtrang')";
        return pdo_execute($sql);
    }
    public function addImg($anhsp,$id){
        $sql="UPDATE $this->table SET anh_sp='$anhsp' WHERE id_sp= '$id'";
        return pdo_execute($sql);
    }
    public function getById($id){
        $sql = "SELECT * FROM $this->table WHERE id_sp = '$id'";
        return pdo_query_one($sql);
    }
    public function SuaSP($id,$name,$gia,$anhsp,$iddm,$tgia,$ngayxb,$tinhtrang){
        $sql = "UPDATE $this->table SET ten_sp = '$name',gia='$gia',anh_sp='$anhsp',id_danh_muc='$iddm',tac_gia='$tgia',ngay_xb='$ngayxb',tinh_trang='$tinhtrang' WHERE id_sp = '$id'";
        return pdo_execute($sql);
    }
    public function del($id){
        $sql = "DELETE FROM $this->table WHERE id_sp = '$id'";
        return pdo_execute($sql);
    }
}