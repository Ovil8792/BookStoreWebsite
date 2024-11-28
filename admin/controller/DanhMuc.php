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
            echo "<div style='margin-top:200px' class='alert alert-success d-flex justify-content-center' role='alert'>Thêm thành công, bấm <a href='index.php?act=danhmuc'>vào đây</a> để về trang danh sách</div>";
            
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
            echo "<div style='margin-top:200px' class='alert alert-success d-flex justify-content-center' role='alert'>Sửa thành công, bấm <a href='index.php?act=danhmuc'>vào đây</a> để về trang danh sách</div>";
            
        }
      
    }
    public function anDM(){
        
            $dm = new danhmuc();
            $id= $_GET['id'];
            $dm->AnDM($id);
            echo "
            <p style='margin-top:200px' class='alert alert-success d-flex justify-content-center' role='alert'>Ẩn thành công, đợi 3s để về lại trang danh mục</p>
            <script>
    document.addEventListener('DOMContentLoaded',()=>{
        setTimeout(()=>{window.location.href='index.php?act=danhmuc'},3000)
    })
</script>";
        
    }
    public function hienDM(){
        $dm = new danhmuc();
        $id= $_GET['id'];
        $dm->HienDM($id);
        echo "
        <p style='margin-top:200px' class='alert alert-success d-flex justify-content-center' role='alert'>Hiện thành công, đợi 3s để về lại trang danh mục</p>
        <script>
    document.addEventListener('DOMContentLoaded',()=>{
        setTimeout(()=>{window.location.href='index.php?act=danhmuc'},3000)
    })
</script>";

    }
    
}

?>

