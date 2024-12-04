<?php
include_once $_SERVER['DOCUMENT_ROOT']."/model/taikhoan.php";
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['username']) && isset($_POST['password'])){
        $usn = $_POST['username'];
        $pwd = $_POST['password'];
        $result = checkDN($usn,$pwd);
        if($result){
        $_SESSION['user']=[$usn,$pwd];
        

        header('Location:index.php');
        }else{
            echo "Tên đăng nhập hoặc mật khẩu không đúng!";
        }
    }
}