<!-- 
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header> -->
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Thêm danh mục</h3>
                    <p class="text-subtitle text-muted">Nhập tên danh mục để thêm</p>
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
                    
                     ?>
                    <form action="index.php?act=adddm" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên danh mục</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
    
                </div>
            </div>
        </section>
    </div>
