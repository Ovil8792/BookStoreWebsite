<?php
include_once "../admin/model/sanpham.php";
class SPCTL{
    public function showSP(){
        $sp = new SanPham();
        $listSP = $sp->listSP();
        return $listSP;
    }

    public function ShowSuaSP(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sp = new SanPham();
            $sanpham = $sp->getById($id);
        }
        return $sanpham;
    }
    
    public function editSP(){
        if(!isset($_GET['id'])){
            echo "id not found";
            die;
        }
        $id= $_GET['id'];
        $sp = new SanPham();
        
        if(isset($_POST['edit'])){
            $name = $_POST['name'];
            $price = $_POST['price'];
            $anhsp = "";
            $iddm = $_POST['iddm'];
            $tgia = $_POST['tgia'];
            $ngayxb = $_POST['ngayxb'];
            $tinhtrang = $_POST['tinhtrang'];
            $sp->SuaSP($id,$name,$price,$anhsp,$iddm,$tgia,$ngayxb,$tinhtrang);
            echo "<div style='margin-top:200px' class='alert alert-success d-flex justify-content-center' role='alert'>Sửa thành công, bấm <a style='color:blue;font-weight:bold;' href='index.php?act=sanpham'> vào đây </a> để về trang danh sách</div>";
        }
    }

    public function delSP(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sp = new SanPham();
            $sp->del($id);
            echo "<div class='alert alert-success d-flex justify-content-center' role='alert'>Xóa thành công, bấm <a href='index.php?act=sanpham'>vào đây</a> để về trang danh sách</div>";
        }
    }


    public function addSP(){

        $sp = new SanPham();
        if(isset($_POST['add'])){
            $name=$_POST['name'];
            $price=$_POST['price'];
            $anhsp = '';
            
            $iddm =$_POST['iddm'];
            $tgia =$_POST['tgia'];
            $ngayxb =$_POST['ngayxb'];
            $tinhtrang=$_POST['tinhtrang'];
            $sp->add($name,$price,$anhsp,$iddm,$tgia,$ngayxb,$tinhtrang);
            echo "<div class='alert alert-success d-flex justify-content-center' role='alert'>Thêm thành công, bấm <a href='index.php?act=sanpham'>vào đây</a> để về trang danh sách</div>";
        }
    }


}