<?php
include_once $_SERVER['DOCUMENT_ROOT']."/model/taikhoan.php";
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['username']) && isset($_POST['password'])){
        $usn = $_POST['username'];
        $pwd = $_POST['password'];
        $result = CDN($usn);
       // var_export($result['password_cli']);
       $hpw = $result['password_cli'];
        if(isset($result) && (password_verify($pwd,$hpw)) ){
        $_SESSION['user']=[$usn,$hpw];
        

        header('Location:index.php');
        }else{
            echo "Tên đăng nhập hoặc mật khẩu không đúng!";
        }
    }
}