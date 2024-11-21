
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
                    <h3>Sửa danh mục</h3>
                    <!-- <p class="text-subtitle text-muted">a</p> -->
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh mục</h4>
                </div>
                <div class="card-body">
<?php
 include_once "../admin/controller/DanhMuc.php";
 $dl = new DanhMucCTL();
$data = $dl->hienSuaDM();

?>
                    <form action="index.php?act=suadm&id=<?=$data['id_danh_muc']?>" method="POST">
                    <div class="mb-3">
                    <?php
                        // foreach($danhmuc as $value){
                    ?>   
                            <label for="id" class="form-label">ID</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?=$data['id_danh_muc']?>" readonly>
                            <label for="name" class="form-label">Tên danh mục</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?=$data['ten_danh_muc']?>" required>
                            
                        </div>

                        <button type="submit" id="edit" name="edit" class="btn btn-primary">Sửa</button>
                    <?php //} ?>
    </form>
                </div>
            </div>
        </section>
    </div>
