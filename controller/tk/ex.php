<?php
include_once $_SERVER['DOCUMENT_ROOT']."/model/taikhoan.php";
    
        $data = $_SESSION['user'];
        $usn = $_SESSION['user']['0'];
        $pwd = $_SESSION['user']['1'];
    
    $dataUser = checkDN($usn,$pwd);
    
   function gotoAD(){
    if(isset($_SESSION['user']) && $_SESSION['user'] !=""){
    $_SESSION['admin']['username_cli'] = $_SESSION['user'][0] ;
    $_SESSION['admin']['password_cli'] = $_SESSION['user'][1] ;
    echo "<script> window.location='/admin/' </script>";
    }else{
    echo "<script> alert('Bạn phải đăng nhập để vào trang quản trị!') </script>";
    echo "<script> window.location='/controller/tk/login.php' </script>";
    }
   }
    
 //include_once $_SERVER['DOCUMENT_ROOT']."/view/layout/header.php";