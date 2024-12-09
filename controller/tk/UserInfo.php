<?php
include_once $_SERVER['DOCUMENT_ROOT']."/model/taikhoan.php";

function getTK(){
    // print_r($_SESSION);
    if(isset($_SESSION['user'])){
        $data = $_SESSION['user'];
        $usn = $_SESSION['user']['user'];
        // $pwd = $_SESSION['user']['1'];
    
    $dataUser = CDN($usn);
    
    include_once $_SERVER['DOCUMENT_ROOT']."/view/user/index.php";
    }else{
        header("Location:login.php");
        exit();
    }
}
function SuaTT(){
    $name = $_POST['hoten'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $address = $_POST['address'];
    $usn = $_SESSION['user']['user'];
    // $pwd = $_SESSION['user']['1'];

    $dataUser = CDN($usn);
    $id = $dataUser['id_user'];
    $file='';
     $uploaddir=$_SERVER['DOCUMENT_ROOT']."/admin/uploads/Users/";
    if(isset($_FILES['file']) && $_FILES['file']['name'] != '' ){
       

        $file = date("Y_m_d_H_i_s").$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $uploaddir.$file);
        updateUser($id,$name,$file,$email,$address,$phone);
    
        //unlink($uploaddir.$dataUser['avatar']);
    }else{
    //var_export($_FILES['file']);
    //echo "<br><br>";
    //var_export($dataUser);
    updateUser($id,$name,$file,$email,$address,$phone);
}
   echo "<script>document.addEventListener('DOMContentLoaded',()=>{setTimeout(()=>{window.location.href='index.php?act=ctnd'},1)})</script>";
}