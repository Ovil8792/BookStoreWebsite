<?php
include_once $_SERVER['DOCUMENT_ROOT']."/model/sanpham.php";
require_once $_SERVER['DOCUMENT_ROOT']."/model/binhluan.php";
include_once $_SERVER['DOCUMENT_ROOT']."/model/DanhMuc.php";


        $data = DSSP();
        $edata = getDM();
        
     function avatarUpload(){
        $uploaddir='uploads/';
        $target_file= $uploaddir.basename($_FILES["anhsp"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["add"])) {
            $check = getimagesize($_FILES["anhsp"]["tmp_name"]);
            if($check!== false) {
                echo "File is an image - ". $check["mime"]. ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["anhsp"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType!= "jpg" && $imageFileType!= "png" && $imageFileType!= "jpeg"
        && $imageFileType!= "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["anhsp"]["name"]). " has been uploaded.";

            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }  
        return $_FILES['anhsp']['name'];
    }

    
function showSPById(){
    $id = $_GET['id'];
    $data = getSPById($id);
    $edata = getDM();
    $dataBl= getBLbyIdSP($_GET['id']);
    $dt=DSSP();
    require_once $_SERVER['DOCUMENT_ROOT']."/view/product/index.php";
}
function checkDMfromSP(){
    $dm = getDM();
    $spDM = getSPByDM( $_GET['id']);
    
    

}