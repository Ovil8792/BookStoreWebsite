


<div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3 id="datacheck">Danh sách User</h3>
                    <p class="text-subtitle text-muted">Xem và kiểm tra danh sách người dùng</p>
                </div>

                <!-- bfayhsgayu -->
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tài Khoản</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Danh sách tài khoản
                </div>
                <!-- <a class="btn btn-primary" href="?act=adddanhmuc">Thêm tài khoản</a> -->
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>ID tài khoản</th>
                                <th>Tên người dùng</th>
                                <th>Email</th>
                                <th>Họ tên</th>
                                <th>Avatar</th>
                                <th>Địa chỉ</th>
                                <th>SĐT</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                               
                                foreach ($data as $v) {
                                ?>
                                <tr>
                                    <td><?= $v['id_user'] ?></td>
                                    <td><?= $v['username_cli']?></td>
                                    <td><?= $v['email_cli']?></td>
                                    <td><?= $v['ho_ten']?></td>
                                    <td><?= $v['avatar']?></td>
                                    <td><?= $v['dia_chi']?></td>
                                    <td><?= $v['sdt']?></td>
                                    <td><?= $v['role']?></td>
                                    <?php if($v['role'] === 'admin'){ ?>
                                        <td>
                                            <div class="d-flex">
                                                t là chủ web t thích làm j kệ t
                                            </div>
                                        </td>
                                        
                                        <?php }else{ ?>
                                    <td>
                                        <div class="d-flex">
                                            <a style="color:black" class="btn btn-warning" href="#">Cảnh cáo</a>
                                            <a class="btn btn-danger" href="#">Chặn</a>

                                        </div>
                                    </td>
                                    <?php } ?>

                                </tr>
                                    
                                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>

