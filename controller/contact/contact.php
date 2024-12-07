<?php
include_once $_SERVER['DOCUMENT_ROOT']."/model/contact.php";

function showCt(){
include_once $_SERVER['DOCUMENT_ROOT']."/view/contact/contact.php";
}
function sendCt(){
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['content']) ){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    
    //Send mail here
    sendC($name,$email,$content);
    
    echo "<script>alert('Cảm ơn bạn đã gửi liên hệ!')
    window.location='index.php?act=contact'
    </script>";
    }else{
        echo "<script>alert('Vui lòng điền đầy đủ thông tin!')</script>";
    }
}