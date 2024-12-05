<?php
include_once $_SERVER['DOCUMENT_ROOT']."/model/checkout.php";
function updGH()
{
    if (isset($_GET['id']) && isset($_GET['qty'])) {
        $id = $_GET['id'];
        $qty = $_GET['qty'];
        if (isset($_SESSION['gioHang'])) {
            foreach ($_SESSION['gioHang'] as $key => $value) {
                if ($value['id'] == $id) {
                    $_SESSION['gioHang'][$key]['soLuong'] = $qty;
                    break;
                }
            }
        }
        header('Content-Type: application/json');
        echo json_encode(['success'=>true]);
    }
}
function addCheckOut() {
    
}

//include_once $_SERVER['DOCUMENT_ROOT'] . "";