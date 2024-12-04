<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $soLuong = 1;

    if (!isset($_SESSION['gioHang'])) {
        $_SESSION['gioHang'] = [];
        $_SESSION['gioHang'][] = [
            'id' => $id,
            'soLuong' => $soLuong
        ];
    } else {
        $tonTaiTrongGioHang = false;
        foreach ($_SESSION['gioHang'] as $key => $item) {
            if ($id == $item['id']) {
                $tonTaiTrongGioHang = true;
                $_SESSION['gioHang'][$key]['soLuong'] += 1;
                
            }
        }
        if ($tonTaiTrongGioHang == false) {
            $_SESSION['gioHang'][] = [
                'id' => $id,
                'soLuong' => $soLuong
            ];
        }
    }
    
    echo "<script> 
    window.location = 'index.php?act=cart';
    </script>";
}