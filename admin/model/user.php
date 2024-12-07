<?php
include_once "pdo.php";
     function listUsers(){
        $sql = "SELECT * FROM tai_khoan";
        return pdo_query($sql);
    }
    function getUser($username){
        // Sử dụng Prepared Statements để tránh SQL Injection
        $sql = "SELECT * FROM tai_khoan WHERE username_cli = '$username'";
        return pdo_query_one($sql);
    }
