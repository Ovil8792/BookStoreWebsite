<?php
include_once "pdo.php";
function checkDN($username, $password){
    $sql = "SELECT * FROM tai_khoan WHERE username_cli='$username' AND password_cli='$password'";
    return pdo_query_one($sql);
}
function CDN($username){
    $sql = "SELECT * FROM tai_khoan WHERE username_cli='$username'";
    return pdo_query_one($sql);
}
function updateUser($id,$hoten,$files,$email,$diachi,$sodt){
    
    if($files == '' || $files ==[]){
    $sql="UPDATE tai_khoan SET ho_ten='$hoten',email_cli='$email',dia_chi='$diachi',sdt='$sodt' WHERE id_user='$id'";
    }else{
    $sql="UPDATE tai_khoan SET ho_ten='$hoten',avatar='$files',email_cli='$email',dia_chi='$diachi',sdt='$sodt' WHERE id_user='$id'";
    }
    return pdo_execute($sql);
}
function register($usn,$pwd,$role){
    $sql="INSERT INTO tai_khoan(username_cli,password_cli,role) VALUES ('$usn','$pwd','$role')";
    return pdo_execute($sql);
}

function find_user($id){
    $sql = "SELECT * FROM tai_khoan WHERE id_user='$id'";
    return pdo_query_one($sql);
}