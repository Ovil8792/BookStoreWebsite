<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">

                <h3 id="datacheck">Bình luận</h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>

            <!-- bfayhsgayu -->
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">

                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Danh sách bình luận
            </div>
            <!-- <a class="btn btn-primary" href="?act=adddanhmuc">Thêm danh mục</a> -->
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th class="col-2">ID</th>
                            <th>ID sản phẩm</th>
                            <th>ID tài khoản</th>
                            <th>Nội dung</th>
                            <th>Đánh giá</th>
                            <th>Ngày tạo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once "../admin/controller/Binhluan.php";
                        $bl = new BinhLuanCTL();
                        $listbl = $bl->HienBL();
                        foreach ($listbl as $value) {
                        ?>
                            <tr>
                                <td><?= $value['id'] ?></td>
                                <td><?= $value['id_sanpham'] ?></td>
                                <td><?= $value['id_taikhoan'] ?></td>
                                <td><?= $value['noidung'] ?></td>
                                <td><?= $value['danhgia'] ?></td>
                                <td><?= $value['ngaytao'] ?></td>
                                <td>
                                    <div class="d-flex">

                                        <a class="btn btn-danger" href="">Ẩn</a>

                                    </div>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>