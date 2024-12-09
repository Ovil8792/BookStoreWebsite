<?php
include_once $_SERVER['DOCUMENT_ROOT']."/model/checkout.php";
include_once $_SERVER['DOCUMENT_ROOT']."/model/sanpham.php";
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

function delItemGH()
{
    $id =$_GET['id'];
    if (isset($_SESSION['gioHang'])) {
        foreach($_SESSION['gioHang'] as $key => $value) {
            if($key == $id) {
                unset($_SESSION['gioHang'][$key]);
                echo "<script>window.location='index.php?act=cart' </script>";
            }
        }
    }
    if($_SESSION['gioHang'] == null || $_SESSION['gioHang'] == []){
        unset($_SESSION['gioHang']);
    }

}

function addCheckOut() {
    if(isset($_POST['thanhtoan'])){
        $listGH = $_SESSION['gioHang'];
        $tongtien =0;
        foreach($listGH as $key => $item){
            $CTSP = getSPById($item['id']);
            $listGH[$key]['ten_sp'] = $CTSP['ten_sp'];
            $listGH[$key]['gia'] = $CTSP['gia'];
            $listGH[$key]['anh_sp'] = $CTSP['anh_sp'];
            $tongtien += $CTSP['gia'] * $item['soLuong'];
        }
        $name = $_POST['hoten'];
        $email = $_POST['email'];
        $phone = $_POST['sdt'];
        $address = $_POST['address'];
        $now = date('Y-m-d');
        $payment= $_POST['payment'];
        $status ="Chưa hoàn thành";
        $tongtien+=20000;
        if(!isset($_SESSION['user'])){
            echo "<script>alert('Bạn chưa đăng nhập!');window.location='login.php';</script>";
            exit;
        }else{
            $cli_id = $_SESSION['user']['id'];
        }
        $IDhd = addCO($cli_id,$name,$phone,$address,$email,$tongtien,$now,$payment,$status);
        foreach($listGH as $item){
            addCTHD($IDhd,$item['id'],$item['soLuong'],$item['gia']);
        }
        unset($_SESSION['gioHang']);
        echo "<script>alert('Đặt hàng thành công!');window.location='index.php';</script>";
    }
    //  var_export($_SESSION['user']);
    // echo $name;
}

//include_once $_SERVER['DOCUMENT_ROOT'] . "";