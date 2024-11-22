
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
                    <h3>Sửa sản phẩm</h3>
                    <!-- <p class="text-subtitle text-muted">a</p> -->
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
 include_once "../admin/controller/SanPham.php";
 $dl = new SPCTL();
 $dm = new DanhMucCTL();
 $dtdm = $dm->listDaMu(); 
$data= $dl->ShowSuaSP();

?>
                    <form action="index.php?act=suaSP&id=<?=$data['id_sp']?>" method="POST">
                    <div class="mb-3">
 
                            <label for="id" class="form-label">ID</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?=$data['id_sp']?>" readonly>
                            <label for="name" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?=$data['ten_sp']?>" required>
                            <label for="price" class="form_label">Giá</label>
                            <input type="number" class="form-control" id="price" name="price" value="<?=$data['gia']?>" required>
                            <label for="anhsp" class="form-label">Ảnh</label>
                            <input type="text" class="form-control" name="anhsp" id="anhsp" value="<?=$data['anh_sp']?>">
                             <label for="iddm" class="form-label">Danh mục</label>
                             <select name="iddm" id="iddm" class="form-select">
                                <?php
                                foreach($dtdm as $value){
                                ?>
                                <option <?=$data['id_danh_muc'] == $value['id_danh_muc']?"selected" :"" ?> value="<?=$value['id_danh_muc']?>"><?=$value['id_danh_muc']?>.<?=$value['ten_danh_muc']?></option>

                                <?php }?>
                            </select>
                            <label for="tgia">Tác giả</label>
                            <input type="text" class="form-control" id="tgia" name="tgia" value="<?=$data['tac_gia']?>" required>
                            <label for="ngayxb">Ngày xuất bản</label>
                            <input type="date" class="form-control" id="ngayxb" name="ngayxb" value="<?=$data['ngay_xb']?>" required>
                            <label for="tinhtrang">Tình trạng</label><br>
                            <span class="form-control" id="tinhtrang" name="tinhtrang">
                                <input class="form-check-input mt-0" name="tinhtrang" id="hethang" value="hết hàng" type="radio" aria-label="Radio button for following text input"><span class="badge rounded-pill text-bg-danger">Hết hàng</span><br>
                                <input class="form-check-input mt-0" name="tinhtrang" id="conhang" value="còn hàng" type="radio" aria-label="Radio button for following text input"><span class="badge rounded-pill text-bg-success">Còn hàng</span>
                            </span><br>
                        </div>

                        <button type="submit" id="edit" name="edit" class="btn btn-primary">Sửa</button>
                    
    </form>
                </div>
            </div>
        </section>
    </div>
