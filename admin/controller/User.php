<?php
include_once $_SERVER['DOCUMENT_ROOT']."/admin/model/user.php";


    function showUser(){
        $data = listUsers();
        include_once $_SERVER['DOCUMENT_ROOT']."/admin/view/taikhoan/index.php";
    }
