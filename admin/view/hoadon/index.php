<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 id="datacheck">DataTable</h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>

            <!-- bfayhsgayu -->
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Danh sách danh mục
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th >ID</th>
                            <th>ID Người dùng</th>
                            <th >Phương thức thanh toán</th>
                            <th >Tình Trạng</th>
                            <th >Tổng</th>
                            <th >Họ Tên</th>
                            <th >Địa Chỉ</th>
                            <th >SĐT</th>
                            <th >Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        foreach ($listhd as $value) {
                        ?>
                            <tr>
                                <td><?= $value['id_hoa_don']+1 ?></td>
                                <td><?= $value['id_nguoidung'] ?></td>
                                <td><?= $value['phuongthucthanhtoan'] ?></td>
                                <td><?= $value['tinhtrang'] ?></td>
                                <td><?= $value['tongtien'] ?></td>
                                <td><?= $value['ho_ten'] ?></td>
                                <td><?= $value['dia_chi'] ?></td>
                                <td><?= $value['so_dt'] ?></td>
                                <td>
                                    <div class="d-flex">

                                        <a class="btn btn-primary" href="index.php?act=chitiethoadon&id_nguoidung=<?= $value['id_nguoidung'] ?>">Chi tiết</a>

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