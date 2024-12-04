<?php
include_once "pdo.php";

    function getDM(){
        $sql = "select * from danh_muc";
        return pdo_query($sql);
    }
    function getDMById($id){
        $sql = "select * from danh_muc where id_danh_muc = '$id'";
        return pdo_query($sql);
    }
