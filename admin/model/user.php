<?php
class User{
    public $table = "tai_khoan";
    public function listUsers(){
        $sql = "SELECT * FROM $this->table";
        return pdo_query($sql);
    }
    // public function WarnUsers($id){
    //     $sql = "UPDATE $this->table SET level = 'warning' WHERE level = 'normal' AND id_user = '$id'";
    //     return pdo_execute($sql);
    // }
}