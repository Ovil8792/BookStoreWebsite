


        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Checkout</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active text-white">Checkout</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- Checkout Page Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <h1 class="mb-4">Chi tiết hóa đơn</h1>
                <?php //var_export($listgiohang) ?>
                <form action="#" method="POST">
                    <div class="row g-5">
                        <div class="col-md-12 col-lg-6 col-xl-7">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <div class="form-item w-100">
                                        <label class="form-label my-3">Họ tên <sup style="color:red;">*</sup></label>
                                        <input type="text" name="hoten" id="hoten" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Địa chỉ <sup style="color:red;">*</sup></label>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Số điện thoại<sup style="color:red;">*</sup></label>
                                <input type="tel" name="sdt" id="sdt" class="form-control">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Địa chỉ email <sup style="color:red;">*</sup></label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Ghi chú</label>
                                <textarea name="text" class="form-control" spellcheck="false" cols="30" rows="6" ></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-5">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Ảnh SP</th>
                                            <th scope="col">Tên SP</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Tổng giá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            // var_export($listgiohang);
                                            // echo "<br><br>".$tongtien;
                                            foreach($listgiohang as $key =>$value){ ?>
                                            <th scope="row"><?=$key+1?></th>
                                            <th scope="row">
                                                <div class="d-flex align-items-center mt-2">
                                                    <img src="/admin/uploads/<?=$value['anh_sp']?>" class="img-fluid rounded-circle" style="width: 90px; height: 90px;" alt="">
                                                </div>
                                            </th>
                                            <td class="py-5"><?=$value['ten_sp']?></td>
                                            <td class="py-5"><?=$value['gia']?> VND</td>
                                            <td class="py-5"><?=$value['soLuong']?></td>
                                            <td class="py-5"><?=$total=$value['gia']*$value['soLuong']?> VND</td>
                                        </tr>
                                        <?php } ?>
                                        <tr>
                                            <th scope="row">
                                            </th>
                                            <td class="py-5"></td>
                                            <td class="py-5"></td>
                                            <td class="py-5">
                                                <p class="mb-0 py-3">Phí ship:</p>
                                                <!-- <p class="mb-0 text-dark py-3">Subtotal</p> -->
                                                
                                            </td>
                                            <td class="py-5">
                                                <div class="py-3 border-bottom border-top">
                                                    <p class="mb-0 text-dark">20.000 VND</p>
                                                </div>
                                                <!-- <div class="py-3 border-bottom border-top">
                                                    <p class="mb-0 text-dark">$414.00</p>
                                                </div> -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            </th>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            </th>
                                            <td class="py-5">
                                                <p class="mb-0 text-dark text-uppercase py-3">Tổng giá</p>
                                            </td>
                                            <td class="py-5"></td>
                                            <td class="py-5"></td>
                                            <td class="py-5">
                                                <div class="py-3 border-bottom border-top">
                                                    <p class="mb-0 text-dark"><?=$tongtien?> VND</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row g-4 text-center align-items-center justify-content-center pt-4">
                                <button type="submit" class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Checkout Page End -->


       