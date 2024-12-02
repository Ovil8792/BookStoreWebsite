<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ Admin</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Tempus Dominus CSS -->
<link href="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus/dist/css/tempus-dominus.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./asset/css/bootstrap.css">

    <link rel="stylesheet" href="./asset/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="./asset/vendors/iconly/bold.css">

    <link rel="stylesheet" href="./asset/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="./asset/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="./asset/css/app.css">
    <link rel="stylesheet" href="<?=$_SERVER['DOCUMENT_ROOT']?>/admin/asset/css/style.css">
    <link rel="shortcut icon" href="./asset/images/favicon.svg" type="image/x-icon">
</head>
<style>
    #logouser{
        cursor: pointer;
    }
</style>

<body>
    
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.php"><img src="./asset/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li id="sad" class="sidebar-item active">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li id="san" class="sidebar-item ">
                            <a href="index.php?act=danhmuc" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Danh mục</span>
                            </a>
                        </li>
                        <li id="sap" class="sidebar-item ">
                            <a href="index.php?act=sanpham" class='sidebar-link'>
                            <i class="bi bi-journal-bookmark-fill"></i>
                                <span>Sản phẩm</span>
                            </a>
                        </li>
                        <li id="sbl" class="sidebar-item ">
                            <a href="index.php?act=binhluan" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Bình luận</span>
                            </a>
                        </li>
                        <li id="sus" class="sidebar-item ">
                            <a href="index.php?act=taikhoan" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Tài khoản</span>
                            </a>
                        </li>
                        <li id="sus" class="sidebar-item ">
                            <a href="index.php?act=hoadon" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Hóa Đơn</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
    <header class="mb-3" style="width:100%;display:flex">
        <a style="width:10%" href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
        <div style="width:75%"><?//=$_SERVER['DOCUMENT_ROOT']."/admin/asset/css/style.css"?></div>
        <div style="width:15%">
       <img width="40px" src="./asset/images/circle.png" alt="user" id="logouser">
        </div>
    </header>