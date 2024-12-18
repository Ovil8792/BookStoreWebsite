
<html>
<head>
    <meta charset="utf-8">
    <title>Sách VN-tổng hợp các loại sách từ tây đến ta</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="./assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <!-- <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->

    <!-- Navbar start -->
    <div class="container-fluid fixed-top">
        <div class="container topbar bg-primary d-none d-lg-block">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#"
                            class="text-white">127 Lê Thánh Tông, Máy Chai, Ngô Quyền, Hải Phòng</a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#"
                            class="text-white">tamuon00@gmail.com</a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                    <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                    <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
                </div>
            </div>
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="index.php" class="navbar-brand">
                    <!-- <h1 class="text-primary display-6">Fruitables</h1> -->
                    <img width="80%" src="./assets/img/lg.png" alt="logo">
                    
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                    <?php //var_export($_SESSION['user']) ?>
                        <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                        <a href="index.php?act=shop" class="nav-item nav-link">Cửa hàng</a>
                        <a href="index.php?act=about" class="nav-item nav-link">Về chúng tôi </a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Các thể loại</a>

                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <!-- thêm đường dẫn trang cart ở đây -->
                                <?php
                                //print_r($edata);
                                foreach ($edata as $key => $value) {
                                    ?>
                                    <a href="#" style="" class="dropdown-item"><?= $value['ten_danh_muc'] ?></a>
                                    <?php
                                }
                                ?>
                            </div>

                        </div>
                        <a href="index.php?act=contact" class="nav-item nav-link">Hỗ trợ</a>
                    </div>
                    <div class="d-flex justify-content-center align-items-center me-0" >
                        <button
                            class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4"
                            data-bs-toggle="modal" data-bs-target="#searchModal"><i
                                class="fas fa-search text-primary"></i></button>
                        <a href="index.php?act=cart" class="position-relative me-4 my-auto">
                            <i class="fa fa-shopping-bag fa-2x"></i>
                            <span
                                class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                                style="top: -5px; left: 15px; height: 20px; min-width: 20px;">
                                <?php 
                                // $_SESSION['gioHang'] == '' && $_SESSION['gioHang'] != null? '0':count($_SESSION['gioHang'])
                                if(!isset($_SESSION['gioHang'])){
                                    echo 0;
                                }else{
                                     echo count($_SESSION['gioHang']);
                                }
                                ?>
                                </span>
                        </a>
                        <div class="dropdown">
                            <a href="#" class="my-auto fas fa-user fa-2x" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.php?act=ctnd">Quản lý tài khoản</a></li>
                                <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
                            </ul>
                        </div>
                        <p class="nav-link">Xin chào <?=$dataUser['ho_ten']?></p>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nhập từ khóa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="từ khóa"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->