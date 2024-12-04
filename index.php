
<!DOCTYPE html>
<html lang="en">

<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');


if(isset($_SESSION['user'])){



include_once $_SERVER['DOCUMENT_ROOT']."/model/binhluan.php";
include_once $_SERVER['DOCUMENT_ROOT']."/controller/tk/ex.php";

require_once $_SERVER['DOCUMENT_ROOT']."/controller/cart/update.php";
require_once $_SERVER['DOCUMENT_ROOT']."/controller/sanpham/SanPham.php";
require_once $_SERVER['DOCUMENT_ROOT']."/controller/tk/UserInfo.php";



require_once "./view/layout/header.php";
 echo "<p style='margin-top:200px;'></p>";
// var_export($dataUser);





if (isset($_GET['act']) && $_GET['act'] != '') {
    $action = $_GET['act'];
    switch($action) {
        case "cart":
            include_once $_SERVER['DOCUMENT_ROOT']."/controller/cart/index.php";
            break;
        case "addToCart":
            include_once $_SERVER['DOCUMENT_ROOT']."/controller/cart/add.php";
            break;
        case "updGH":
            updGH();
            break;
        case "checkout":
            include_once $_SERVER['DOCUMENT_ROOT']."/controller/cart/checkout.php";
            break;
        case "shop":
            include_once $_SERVER['DOCUMENT_ROOT']."/controller/shop/index.php";
            break;
        case "ctnd":
            getTK();
            break;
        case "suaTTUser":
            SuaTT();
            break;
        case "ctsp":
            showSPById();
            break;
        case "about":
            include_once $_SERVER['DOCUMENT_ROOT']."/controller/about/index.php";
            break;
    }
}else{
include_once $_SERVER['DOCUMENT_ROOT']."/view/home/home.php";

    }
    // var_export($_SESSION['user']);



require_once "./view/layout/footer.php";
?>

</html>
<?php
 }else{
    header('Location:login.php');
    exit();
}