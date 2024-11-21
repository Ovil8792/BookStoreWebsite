<?php
class DanhMucCTL{
    public function listDaMu(){
        $dm = new danhmuc();
        $listDanhMuc = $dm->listDanhMuc();
        return $listDanhMuc;
    }
    public function AddDM(){
        if(isset($_POST['name'])){
            $dbdm = new danhmuc();
            $ten = $_POST['name'];
            $dbdm->addDanhMuc($ten);
            echo "<div class='alert alert-success' role='alert'>Thêm thành công, bấm <a href='index.php?act=danhmuc'>vào đây</a> để về trang danh sách</div>";
            
        }
        
    }
     public function hienSuaDM(){
        $id=$_GET['id'];
        $dbdm = new danhmuc();
        return $danhmuc = $dbdm->ShowDMById($id);
    }
    public function SuaDM(){
        if(!isset($_GET['id'])){
            echo "id not found";
            die;
        }
        $id = $_GET['id'];
        $dbdm = new danhmuc();

        if(isset($_POST['edit'])){
            $ten = $_POST['name'];
            $dbdm->SuaDanhMuc($id, $ten);
            echo "<div class='alert alert-success' role='alert'>Sửa thành công, bấm <a href='index.php?act=danhmuc'>vào đây</a> để về trang danh sách</div>";
            
        }
      
    }
    public function fileTransfer(){
        
    }
    
}

