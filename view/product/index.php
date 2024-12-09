<?php
// print_r($data);
// echo "<br><br><br>";
// print_r($edata);
// var_export($_SESSION['user']);
?>

        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Cửa hàng</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active text-white">Chi tiết sản phẩm</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- Single Product Start -->
        <div class="container-fluid py-5 mt-5">
            <div class="container py-5">
                <div class="row g-4 mb-5">
                    <div class="col-lg-8 col-xl-9">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="border rounded">
                                    <a href="#">
                                        <img width="50%" src="/admin/uploads/<?=$data['anh_sp']?>" class="img-fluid rounded" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h4 class="fw-bold mb-3"><?=$data['ten_sp']?></h4>
                                
                                <p class="mb-3">Danh mục:<?//=$data['id_danh_muc']?></p>

                                <h5 class="fw-bold mb-3"><?=number_format($data['gia'],0,",",".")?> VND</h5>
                                <div class="d-flex mb-4">
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="mb-4"><?=$data['mota']?></p>
                                <div class="input-group quantity mb-5" style="width: 100px;">
                                    <span style="margin-top:3px">Số lượng:</span>
                                    <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                    
                                </div>
                                <a href="index.php?act=addToCart&id=<?=$_GET['id']?>" class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Thêm vào giỏ hàng</a>
                            </div>
                            <div class="col-lg-12">
                                <nav>
                                    <div class="nav nav-tabs mb-3">
                                        <button class="nav-link active border-white border-bottom-0" type="button" role="tab"
                                            id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about"
                                            aria-controls="nav-about" aria-selected="true">Mô tả</button>
                                        <button class="nav-link border-white border-bottom-0" type="button" role="tab"
                                            id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission"
                                            aria-controls="nav-mission" aria-selected="false">Reviews</button>
                                    </div>
                                </nav>
                                <div class="tab-content mb-5">
                                    <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                    <?=$data['mota']?>
                                    </div>
                                    <div class="tab-pane" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                        <?php foreach($dataBl as $k){
                                        // print_r($dataBl);
                                        ?>
                                        <div class="d-flex">
                                            <img src="img/avatar.jpg" class="img-fluid rounded-circle p-3" style="width: 100px; height: 100px;" alt="">
                                            <div class="">
                                                <p class="mb-2" style="font-size: 14px;"><?=$k['ngaytao']?></p>
                                                <div class="d-flex justify-content-between">
                                                    <h5>Jason Smith</h5>
                                                    <div class="d-flex mb-3">
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <p><?=$k['noidung'] ?></p>
                                            </div>
                                        </div>
                                        <?php }?>
                                    </div>
                                    <div class="tab-pane" id="nav-vision" role="tabpanel">
                                        <?=$k['noidung'] ?>
                                    </div>
                                </div>
                            </div>
                            <form action="index.php?act=binhluan" method="POST">
                                <h4 class="mb-5 fw-bold">Bình luận</h4>
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="border-bottom rounded my-4">
                                            <input type="hidden" name="id_sp" value="<?=$data['id_sp']?>">
                                            <textarea name="content" id="content" class="form-control border-0" cols="30" rows="8" placeholder="Bình luận" spellcheck="false" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between py-3 mb-5">
                                            <button type="submit" name="comment" id="comment" class="btn border border-secondary text-primary rounded-pill px-4 py-3">Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                            <!-- vị trí hiển thị comment dựa theo id-sp -->
                                            <div class=" col-xl-12">
                                                <div class="row">
                                                    <div class="col-lg-12"><p class="fs-4 fw-bold">Các bình luận:</p></div>
                                                    <div class="col-lg-12 mx-3 py-2 border-top border-bottom" style="">
                                                        <?php  foreach($dataBl as $a){?>
                                                        <div class="card">
                                                            <?php //var_export($dataBl); ?>
                                                            <div class=" rounded d-flex">
                                                                <img class=" rounded mx-2 my-2" style="width:75px; max-width:100px;max-height:100px" src="/admin/uploads/Users/<?=$a['avatar']?>" alt="avtngdung">
                                                                <span class=" mt-3 fw-bold d-flex justify-content-start align-items-start"><?=$a['hoten']?></span>
                                                            </div>
                                                            
                                                            <div class="card-body"><?=$a['noidung']?></div>
                                                            
                                                        </div>

                                                        <?php }?>
                                                    </div>
                                                </div>
                                            </div>


                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="row g-4 fruite">
                            <div class="col-lg-12">
                                <div class="input-group w-100 mx-auto d-flex mb-4">
                                    <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                                </div>
                                <div class="mb-4">
                                    <h4>Danh mục</h4>
                                    <ul class="list-unstyled fruite-categorie">
                                        <?php
                                        //     var_export($edata);
                                        //  checkDMfromSP();
                                        foreach($edata as $a){ ?>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="index.php?act=SPbyDM&id=<?=$a['id_danh_muc']?>"><i class="fas fa-apple-alt me-2"><?=$a['ten_danh_muc']?></i></a>
                                                <span>(3)</span>
                                            </div>
                                        </li>
                                        <?php } ?>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h4 class="mb-4">Các sản phẩm khác</h4>
                                <?php //var_export($dt);?>
                                <?php foreach($dt as $key){ ?>

                                <div class="d-flex align-items-center justify-content-start my-5 py-2">
                                    <div class="rounded" style="width: 100px; height: 100px;">
                                        <img src="/admin/uploads/<?=$key['anh_sp']?>" class="img-fluid rounded" alt="Image">
                                    </div>
                                    <div>
                                        <h6 class="mb-2 ms-2 mt-5"><?=$key['ten_sp']?></h6>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2 ms-5"><?=number_format($key['gia'],0,',',".")?> VND</h5>
                                            <!-- <h5 class="text-danger text-decoration-line-through">4.11 $</h5> -->
                                        </div>
                                    </div>
                                </div>

                                            <?php } ?>


                                <div class="d-flex justify-content-center my-4">
                                    <a href="#" class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">Vew More</a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="position-relative">
                                    <img src="" class="img-fluid w-100 rounded" alt="">
                                    <div class="position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">
                                        <h3 class="text-secondary fw-bold">Fresh <br> Fruits <br> Banner</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="fw-bold mb-0">Related products</h1>
                <div class="vesitable">
                    <div class="owl-carousel vegetable-carousel justify-content-center">
                     
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product End -->
    

       