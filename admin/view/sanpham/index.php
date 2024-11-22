
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
                    <h3 id="datacheck">Sản phẩm</h3>
                    <p class="text-subtitle text-muted">Trang danh sách sản phẩm</p>
                </div>

                <!-- bfayhsgayu -->
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Danh sách sản phẩm
                </div>
                <a class="btn btn-primary" href="?act=addsanpham">Thêm sản phẩm</a>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Tên sản phẩm</td>
                                <td>Ảnh</td>
                                <td>Giá</td>
                                <td>Danh mục</td>
                                <td>Tác giả</td>
                                <td>Ngày xuất bản</td>
                                <td>Tình trạng</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                               <?php
                                    include_once "../admin/controller/SanPham.php";
                                    $data =new SPCTL();
                                    $dtsp = $data->showSP();
                                    $basepicdir= "../admin/uploads/";
                                    foreach($dtsp as $value){
                               
                               ?>
                                <tr>
                                    <td><?=$value['id_sp']?></td>
                                    <td><?=$value['ten_sp']?></td>
                                    <td><img width="10%" src="<?=$basepicdir.$value['anh_sp']?>" alt="<?=$value['anh_sp']!=''?'anh_sp' :'default img'?>"></td>
                                    <td><?=$value['gia']?></td>
                                    <td><?=$value['id_danh_muc']?></td>
                                    <td><?=$value['tac_gia']?></td>
                                    <td><?=$value['ngay_xb']?></td>
                                    <td><span class="<?=$value['tinh_trang']=="còn hàng"? "badge rounded-pill text-bg-success" :" badge rounded-pill text-bg-danger" ?>"><?=$value['tinh_trang']?></span></td>
                                    <td class="d-flex">
                                    <a href="index.php?act=&id=<?=$value['id_sp']?>" class="btn btn-primary">Sửa ảnh</a>
                                        <a href="index.php?act=editsp&id=<?=$value['id_sp']?>" class="btn btn-primary">Sửa</a>
                                        <a href="index.php?act=delsp&id=<?=$value['id_sp']?>" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                                   <?php }?>

                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
</div>

