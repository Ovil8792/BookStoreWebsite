<?php
include_once $_SERVER['DOCUMENT_ROOT']."/model/taikhoan.php";
    
        $data = $_SESSION['user'];
        $usn = $_SESSION['user']['0'];
        $pwd = $_SESSION['user']['1'];
    
    $dataUser = checkDN($usn,$pwd);
    
   
    
 //include_once $_SERVER['DOCUMENT_ROOT']."/view/layout/header.php";