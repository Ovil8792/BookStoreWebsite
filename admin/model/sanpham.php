<?php
     
    function listSP(){
        $sql = "SELECT * FROM san_pham";
        return pdo_query($sql);
    }
    function add($name,$gia,$anhsp,$iddm,$tgia,$ngayxb,$tinhtrang,$mota){
        $sql="INSERT INTO san_pham VALUES (NULL,'$name','$gia','$anhsp','$iddm','$tgia','$ngayxb','$tinhtrang','$mota')";
        return pdo_execute($sql);
    }
    function addImg($anhsp,$id){
        $sql="UPDATE san_pham SET anh_sp='$anhsp' WHERE id_sp= '$id'";
        return pdo_execute($sql);
    }
    function getById($id){
        $sql = "SELECT * FROM san_pham WHERE id_sp = '$id'";
        return pdo_query_one($sql);
    }
    function SuaSP($id,$name,$gia,$anhsp,$iddm,$tgia,$ngayxb,$tinhtrang,$mota){
        $sql = "UPDATE san_pham SET ten_sp = '$name',gia='$gia',anh_sp='$anhsp',id_danh_muc='$iddm',tac_gia='$tgia',ngay_xb='$ngayxb',tinh_trang='$tinhtrang',mota='$mota' WHERE id_sp = '$id'";
        return pdo_execute($sql);
    }
    function del($id){
        $sql = "DELETE FROM san_pham WHERE id_sp = '$id'";
        return pdo_execute($sql);
    }
