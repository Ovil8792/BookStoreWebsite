<?php
include_once "pdo.php";

    function getDM(){
        $sql = "select * from danh_muc";
        return pdo_query($sql);
    }
