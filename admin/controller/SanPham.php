<?php
include_once $_SERVER['DOCUMENT_ROOT']."/admin/model/sanpham.php";
include_once $_SERVER['DOCUMENT_ROOT']."/admin/model/danhmuc.php";

    function showSP(){
        
        $listSP = listSP();
        
        require_once $_SERVER['DOCUMENT_ROOT']."/admin/view/sanpham/index.php";
    }

    function ShowSuaSP(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $dm = listDanhMuc();
            $data = getById($id);
            include_once $_SERVER['DOCUMENT_ROOT']."/admin/view/sanpham/edit.php";
        }
    }
    
    function editSP(){
        if(!isset($_GET['id'])){
            echo "id not found";
            die;
        }
        $id= $_GET['id'];
        
        
        if(isset($_POST['edit'])){
            $name = $_POST['name'];
            $price = $_POST['price'];
            $anhsp = $_POST['anhsp'];
            $iddm = $_POST['iddm'];
            $tgia = $_POST['tgia'];
            $ngayxb = $_POST['ngayxb'];
            $tinhtrang = $_POST['tinhtrang'];
            $mota = $_POST['mota'];
            SuaSP($id,$name,$price,$anhsp,$iddm,$tgia,$ngayxb,$tinhtrang,$mota);
            echo "<div style='margin-top:200px' class='alert alert-success d-flex justify-content-center' role='alert'>Sửa thành công, bấm <a style='color:blue;font-weight:bold;' href='index.php?act=sanpham'> vào đây </a> để về trang danh sách</div>";
        }
    }

    function fileTransfer(){
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
        if ($_FILES["anhsp"]["size"] > 100000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType!= "jpg" && $imageFileType!= "png" && $imageFileType!= "jpeg"
        && $imageFileType!= "gif" &&$imageFileType!= "webp" ) {
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

    function delSP(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            del($id);
            echo "<div style='margin-top:200px' class='alert alert-success d-flex justify-content-center' role='alert'>Xóa thành công, bấm <a href='index.php?act=sanpham'>vào đây</a> để về trang danh sách</div>";
        }
    }


    function addSP(){

        
        if(isset($_POST['add'])){
            $name=$_POST['name'];
            $price=$_POST['price'];
            $anhsp = fileTransfer();
            
            
            $iddm =$_POST['iddm'];
            $tgia =$_POST['tgia'];
            $ngayxb =$_POST['ngayxb'];
            $tinhtrang=$_POST['tinhtrang'];
            $mota = $_POST['mota'];
            add($name,$price,$anhsp,$iddm,$tgia,$ngayxb,$tinhtrang,$mota);
            echo "<div class='alert alert-success d-flex justify-content-center' role='alert'>Thêm thành công, bấm <a href='index.php?act=sanpham'>vào đây</a> để về trang danh sách</div>";
        }
    }


    $data = listDanhMuc();