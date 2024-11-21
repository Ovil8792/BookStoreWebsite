<?php

class SanPham{
    public $table = 'san_pham';
    public $uploaddir='uploads/';
    public function listSP(){
        $sql = "SELECT * FROM $this->table";
        return pdo_query($sql);
    }
    public function add($name,$gia,$anhsp,$iddm,$tgia,$ngayxb,$tinhtrang){
        $sql="INSERT INTO $this->table VALUES (NULL,'$name','$gia','$anhsp','$iddm','$tgia','$ngayxb','$tinhtrang')";
        return pdo_execute($sql);
    }
    public function addImg($file){
        if(!is_dir($this->uploaddir)){
            mkdir($this->uploaddir,0755,true);
        }
        if($file['error'] !== UPLOAD_ERR_OK){
            return ['success'=>false,'error'=>'upload error'];
        }
        $fileName= $file['name'];
        $allowedTypes = ['jpg', 'png' ,'jfif','jpeg', 'gif'];
        $fileType= strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
        if(!in_array($fileType,$allowedTypes)){
            return ['success'=>false,'error'=>'invalid file type'];
        }

        $filePath= $this->uploaddir.basename($file['name']);
        if(!move_uploaded_file($file['tmp_name'],$filePath)){
            return ['success'=>false,'error'=>'failed to move file'];
        }
        
        $sql="INSERT INTO $this->table (anh_sp) values ($fileName)";
        try{
             pdo_execute($sql);
        }catch (PDOException $e) {
            return ['success' => false, 'error' => 'Database error: ' . $e->getMessage()];
        }

        return ['success' => true, 'filePath' => $filePath];
    }
    public function getById($id){
        $sql = "SELECT * FROM $this->table WHERE id_sp = '$id'";
        return pdo_query_one($sql);
    }
    public function SuaSP($id,$name,$gia,$anhsp,$iddm,$tgia,$ngayxb,$tinhtrang){
        $sql = "UPDATE $this->table SET ten_sp = '$name',gia='$gia',anh_sp='$anhsp',id_danh_muc='$iddm',tac_gia='$tgia',ngay_xb='$ngayxb',tinh_trang='$tinhtrang' WHERE id_sp = '$id'";
        return pdo_execute($sql);
    }
    public function del($id){
        $sql = "DELETE FROM $this->table WHERE id_sp = '$id'";
        return pdo_execute($sql);
    }
}