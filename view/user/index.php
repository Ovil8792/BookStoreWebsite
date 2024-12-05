<div class="row" style="margin:auto;height:800px;width:80%;">

<?php 
// var_export($dataUser);
//  var_export($data);
?>
<h5 class="card-title">Thông tin người dùng</h5>
<div class="col-12 mb-3 mb-sm-0">
    <form action="index.php?act=suaTTUser" method="POST" class="card h-100" enctype="multipart/form-data">
        <div class="card-body">
            
            <img class="rounded-circle" width="200px" src="../admin/uploads/Users/<?=$dataUser['avatar']?>" alt="Avatar người dùng" style="max-height:200px;margin-right:300px;border:1px solid black;" > <br>
            <input type="file" class="form-control" id="file" name="file">
        </div>
        <div class="card-body ">
            <!-- <p contenteditable="true">ajfbiahj</p> -->
            <label for="hoten" class="card-text form-label">Họ tên: </label>
            <input type="text" value="<?=$dataUser['ho_ten']?>" id="hoten" name="hoten" class="form-control">
            <label for="email" class="card-text form-label">Email:</label>
            <input type="text" value="<?=$dataUser['email_cli']?>" id="email" name="email" class="form-control">
            <label for="address" class="card-text form-label">Địa chỉ: </label>
            <input type="text" value="<?=$dataUser['dia_chi']?>" id="address" name="address" class="form-control">
            <label for="number" class="card-text form-label">Số đt: </label>
            <input type="number" value="<?=$dataUser['sdt']?>" id="number" name="number" class="form-control">
            <?php if($dataUser['role'] == "admin" ||$dataUser['role'] == "coAD" ){ ?>
            <a href="index.php?act=">Đến trang Admin</a>
            <?php }else{ ?>
                <label class="form-label">Quyền hạn: <?=$dataUser['role']?></label>
                <?php } ?>
        </div>
        <button class="btn btn-primary" type="submit">Sửa thông tin</button>
</form>
</div>
</div>