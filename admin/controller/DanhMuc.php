<?php
include_once $_SERVER['DOCUMENT_ROOT']."/admin/model/danhmuc.php";


    function listDaMu(){
        
        $listDanhMuc = listDanhMuc();
        require_once $_SERVER['DOCUMENT_ROOT']."/admin/view/danhmuc/index.php";

    }
    function AddDM(){
        if(isset($_POST['name'])){
            
            $ten = $_POST['name'];
            addDanhMuc($ten);
            echo "<div style='margin-top:200px' class='alert alert-success d-flex justify-content-center' role='alert'>Thêm thành công, bấm <a href='index.php?act=danhmuc'>vào đây</a> để về trang danh sách</div>";
            
        }
        
    }
    function hienSuaDM(){
        $id=$_GET['id'];
        
        $data = ShowDMById($id);
        include_once $_SERVER['DOCUMENT_ROOT']."/admin/view/danhmuc/edit.php";
    }
    function SuaDM(){
        if(!isset($_GET['id'])){
            echo "id not found";
            die;
        }
        $id = $_GET['id'];
        

        if(isset($_POST['edit'])){
            $ten = $_POST['name'];
            SuaDanhMuc($id, $ten);
            echo "<div style='margin-top:200px' class='alert alert-success d-flex justify-content-center' role='alert'>Sửa thành công, bấm <a href='index.php?act=danhmuc'>vào đây</a> để về trang danh sách</div>";
            
        }
      
    }
    function anDaMu(){
            $id= $_GET['id'];
            AnDM($id);
            echo "
            <p style='margin-top:200px' class='alert alert-success d-flex justify-content-center' role='alert'>Ẩn thành công, đợi 3s để về lại trang danh mục</p>
            <script>
    document.addEventListener('DOMContentLoaded',()=>{
        setTimeout(()=>{window.location.href='index.php?act=danhmuc'},3000)
    })
</script>";
        
    }
    function hienDaMu(){

        $id= $_GET['id'];
        HienDM($id);
        echo "
        <p style='margin-top:200px' class='alert alert-success d-flex justify-content-center' role='alert'>Hiện thành công, đợi 3s để về lại trang danh mục</p>
        <script>
    document.addEventListener('DOMContentLoaded',()=>{
        setTimeout(()=>{window.location.href='index.php?act=danhmuc'},3000)
    })
</script>";

    }
    


