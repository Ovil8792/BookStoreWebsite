<?php
include_once '../admin/model/danhmuc.php';
class Danhmuc
{
    public $listDanhMuc;
    public function flowDanhmuc()
    {
        
        // Nếu cần dữ liệu ở data base thì gọi model
        $listDanhMuc = listDanhMuc();
        // Xử lý dữ liệu từ database về

        // Ném qua view để hiển thị cho người dùng
        // include_once '..admin/view/danhmuc/index.php';
        return $listDanhMuc;
    }
}