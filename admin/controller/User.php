<?php
include_once "../admin/model/user.php";
class UserCTL{
    /**
     * Hàm thực thi trả về dữ liệu danh sách người dùng, 
     * lấy dữ liệu từ model
     * @return array
     */
    public function showUser(){
        $us = new User();
        $data = $us->listUsers();
        return $data;
    }
}