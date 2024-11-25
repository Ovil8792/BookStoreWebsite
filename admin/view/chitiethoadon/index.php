<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 id="datacheck">Chi tiết hóa đơn</h3>
                <p class="text-subtitle text-muted">Trang danh sách hóa đơn</p>
            </div>

            <!-- bfayhsgayu -->
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chi tiết hóa đơn</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Chi Tiết Hóa Đơn
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Mã Hóa Đơn</td>
                            <td>Giá</td>
                            <td>Số Lượng</td>
                            <td>Mã Sản Phẩm</td>
                            <td>Thao Tác</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once "../admin/controller/Chitiethoadon.php";
                        $data = new ChiTietHoaDonCTL();
                        $cthd = $data->ShowCTHD();
                        foreach ($cthd as $value) {

                        ?>
                            <tr>
                                <td><?= $value['id'] ?></td>
                                <td><?= $value['id_hoa_don'] ?></td>
                                <td><?= $value['gia' * 'soluong'] ?></td>
                                <td><?= $value['soluong'] ?></td>
                                <td><?= $value['id_sp'] ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
</div>