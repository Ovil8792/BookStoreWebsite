<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Cửa Hàng</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
       <li class="breadcrumb-item active text-white">Cửa Hàng</li>
    </ol>
</div>
<!-- Single Page Header End -->


<!-- Fruits Shop Start-->
<div class="container-fluid fruite py-5">
    <div class="container py-5">
        <h1 class="mb-4">Cửa hàng sách</h1>
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-xl-3">
                        <div class="input-group w-100 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-xl-3">
                        <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                            <label for="fruits">Default Sorting:</label>
                            <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light me-3" form="fruitform">
                                <option value="volvo">Nothing</option>
                                <option value="saab">Popularity</option>
                                <option value="opel">Organic</option>
                                <option value="audi">Fantastic</option>
                            </select>
                        </div>
                    </div>
                </div>
                <?php

                ?>
                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <h4>Danh mục</h4>
                                    <?php  foreach ($dsDM as $v) {if($v['stat'] == 1){ ?>
                                        <ul class="list-unstyled fruite-categorie">
                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="index.php?act=SPbyDM&id=<?=$v['id_danh_muc']?>"><i class="fas fa-apple-alt me-2"><?=$v['ten_danh_muc']?></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    <?php } } ?>
                                </div>
                            </div>
                            <script>
                                function updateValue() {
                                    const range = document.getElementById("rangeInput");
                                    const output = document.getElementById("amount");

                                    // Làm tròn đến bội số của 100
                                    const roundedValue = Math.ceil(range.value / 10) * 10;

                                    // Cập nhật giá trị hiển thị
                                    output.value = roundedValue;
                                    range.value = roundedValue;
                                }
                            </script>

                        </div>
                    </div>
                    <div class="col-lg-9">
                        <?php //var_export($DMD); 
                        //var_export($sp);
                        ?>
                        <div class="fs-1 fw-bold"><?=$DMD[0]['ten_danh_muc'];?></div>
                        <div class="row g-4 justify-content-center">
                            <?php foreach ($sp as $v) { ?>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div style="height: 450px;" class="fruite-img">
                                            <img src="/admin/uploads/<?=$v['anh_sp'] ?>" width="100%" height="100%" style="align-items: center;display: flex;justify-content:center" class="" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4><a href="index.php?act=ctsp&id=<?=$v['id_sp']?>"><?=$v['ten_sp']?></a></h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0"><?=number_format($v['gia'],0,",",".")?> VND</p>
                                                <a href="index.php?act=addToCart&id=<?=$v['id_sp']?>" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Thêm vào giỏ hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="col-12">
                                <div class="pagination d-flex justify-content-center mt-5">
                                    <a href="#" class="rounded">&laquo;</a>
                                    <a href="#" class="active rounded">1</a>
                                    <a href="#" class="rounded">2</a>
                                    <a href="#" class="rounded">3</a>
                                    <a href="#" class="rounded">4</a>
                                    <a href="#" class="rounded">5</a>
                                    <a href="#" class="rounded">6</a>
                                    <a href="#" class="rounded">&raquo;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fruits Shop End-->