

    <div class="page-heading">
        <h3>Doanh thu</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <?php
                                            // var_export($listhd);
                                            // echo date("Y-m-d")
                                        ?>
                                        <h6 class="text-muted font-semibold">Doanh thu ngày</h6>
                                        <h6 class="font-extrabold mb-0"><?=$dayRev?> VND</h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                        <i class="iconly-boldShow"></i>                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Doanh thu tuần</h6>
                                        <h6 class="font-extrabold mb-0"><?=$weekRev?> VND</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                        <i class="iconly-boldShow"></i>                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold" id="datacheck">Doanh thu tháng</h6>
                                        <h6 class="font-extrabold mb-0"><?=$monthRev?> VND</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Biểu đồ doanh thu</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Bình luận mới nhất</h4>
                                <?php 
                                // print_r($listCMT);
                                // echo "<br><br><br><br>";
                                //     print_r($listUser);
                                ?>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <thead>
                                            <tr>
                                                <th scope="row">#</th>
                                                <th>Tên</th>
                                                <th>Comment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach($listCMT as $cmt){ ?>

                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="/admin/uploads/Users/<?=$avt?>">
                                                        </div>
                                                        
                                                    </div>
                                                </td>
                                                <td class="col-3"><p class="font-bold ms-3 mb-0"><?=$clientName?></p></td>
                                                <td class="col-auto">
                                                    <p class=" mb-0"><?=$cmt['noidung']?></p>
                                                </td>
                                            </tr>

                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="/admin/uploads/Users/<?=$_SESSION['admin']['avatar']?>" alt="Face 1">
                            </div>
                            <div style="width:5%"></div>
                            <div class="name">
                                <h5 class="font-bold">Xin chào</h5>
                                <?php //var_export($_SESSION['admin'])?>
                                <h6 class="text-muted mb-0"><?=$_SESSION['admin']['ho_ten']?></h6>
                            </div>
                            
                        </div>
                        <br><h6 class="text-muted ms-5 mb-0"><a class="badge rounded-pill text-bg-danger" href="logout.php">Đăng xuất?</a></h6>
                    </div>
                </div>

            </div>
        </section>
    </div>