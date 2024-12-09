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
                <?php
                //  var_export($hoaDonChiTiet);
                  ?>
            </div>
            <div class="card-body">
                <form action="index.php?act=suattHD&id=<?=$hoaDonChiTiet['id_hoa_don']?>" method="POST">
                   <div class="mb-3">
                   <label class="form-label" for="name">Tên người nhận</label>
                   <input type="text" disabled value="<?=$hoaDonChiTiet['ho_ten']?>" class="form-control" id="name" name="name">
                   </div>
                   <div class="mb-3">
                   <label class="form-label" for="address">Địa chỉ người nhận</label>
                   <input type="text" disabled value="<?=$hoaDonChiTiet['dia_chi']?>" class="form-control" id="address" name="address">
                   </div>
                   <div class="mb-3">
                   <label class="form-label" for="number">Số ĐT</label>
                   <input type="text" disabled value="<?=$hoaDonChiTiet['so_dt']?>" class="form-control" id="number" name="number">
                   </div>
                   <div class="mb-3">
                   <label class="form-label" for="total">Số tiền thanh toán</label>
                   <input type="text" disabled value="<?=$hoaDonChiTiet['total']?>" class="form-control" id="total" name="total">
                   </div>
                   <div class="mb-3">
                   <label class="form-label" for="stat" >Trạng thái</label>
                   <select name="stat" id="stat" class="form-select">
                    <option <?=$hoaDonChiTiet['tinhtrang']=="Đã hoàn thành"?"selected" : ""?> value="Đã hoàn thành">Đã hoàn thành</option>
                    <option <?=$hoaDonChiTiet['tinhtrang']=="Chưa hoàn thành"?"selected" : ""?> value="Chưa hoàn thành">Chưa hoàn thành</option>
                    <option <?=$hoaDonChiTiet['tinhtrang']=="Đã hủy"?"selected" : ""?> value="Đã hủy">Đã hủy</option>
                   </select>
                   </div>
                   <div class="col-12 col-md-6 order-md-1 order-last">
                    <?php
                    
                    ?>
                            <h3>Sản phẩm</h3>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="col-2">ID</th>
                                    <th class="col-2">Tên sản phẩm</th>
                                    <th class="col-2">Số lượng</th>
                                    <th class="col-2">Ảnh SP</th>
                                    <th class="col-2">Giá</th>
                                    <th class="col-2">Tổng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // var_export($hoaDonInfo);
                                foreach($hoaDonInfo as $key){ ?>
                                <tr>
                                    <td><?=$key['id_sp']?></td>
                                    <td><?=$key['ten_sp']?></td>
                                    <td><?=$key['soluong']?></td>
                                    <td><img src="/admin/uploads/<?=$key['anh_sp']?>" width="140px" alt=""></td>
                                    <td><?=number_format($key['gia'],0,",",".")?>VND</td>
                                    <td><?=number_format($key['gia'] * $key['soluong'])?> VND</td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <input type="hidden" name="id" value="<?= $hoaDonChiTiet['id_hoa_don'] ?>">
                        <button class="btn btn-primary" name="edit" type="submit">Cập nhật trạng thái</button>
                </form>
            </div>
        </div>

    </section>
</div>
</div>