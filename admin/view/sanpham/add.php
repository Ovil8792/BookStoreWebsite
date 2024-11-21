<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Thêm sản phẩm</h3>
                    <p class="text-subtitle text-muted">Nhập các chi tiết để thêm</p>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sản phẩm</h4>
                </div>
                <div class="card-body">
                    <?php
                    include_once "../admin/controller/DanhMuc.php";
                    $dm = new DanhMucCTL();
                    $data = $dm->listDaMu();
                    ?>
                    <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <label for="price" class="form-label">Giá sản phẩm</label>
                            <input type="number" class="form-control" id="price" name="price" required>
                            <label for="anhsp" class="form-label">Ảnh sản phẩm</label>
                            <input type="file" class="form-control" id="anhsp" name="anhsp">
                            <label for="iddm" class="form-label">Danh mục</label><br>
                            <select name="iddm" id="iddm" class="form-select" aria-label="SELECT FOR CATEGORY">
                                <option value="" selected>Chọn danh mục</option>
                                <?php

                                foreach ($data as $value) {
                                    ?>
                                    <option value="<?= $value['id_danh_muc'] ?>"><?= $value['id_danh_muc']?>.<?=$value['ten_danh_muc']?></option>

                                    <?php
                                }
                                ?>
                            </select>
                            <label for="tgia" class="form_label">Tác giả</label>
                            <input type="text" name="tgia" id="tgia" class="form-control">
                            <label for="ngayxb" class="form_label">Ngày xuất bản</label>
                            <input type="date" id="ngayxb" name="ngayxb" class="form-control">
                            <label for="tinhtrang" class="form-label">Tình trạng</label><br>
                            
                            <span class="form-control">
                                <input class="form-check-input mt-0" name="tinhtrang" id="hethang" value="hết hàng" type="radio" aria-label="Radio button for following text input"><span class="badge rounded-pill text-bg-danger">Hết hàng</span><br>
                                <input class="form-check-input mt-0" name="tinhtrang" id="conhang" value="còn hàng" type="radio" aria-label="Radio button for following text input"><span class="badge rounded-pill text-bg-success">Còn hàng</span>
                            </span><br>
                            

                        </div>
                        <button type="submit" id="add" name="add" class="btn btn-primary">Thêm</button>
                    </form>

                </div>
            </div>
        </section>
    </div>