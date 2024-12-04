<?php
if (isset($_SESSION['user'])){
    header('Location:index.php');
    exit();
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="d-flex justify-content-center mt-5">
    <form action="dn.php" method="post" style="background:lightblue; width:350px;padding:20px;border-radius:4px;">
        <label for="username" class="fw-semibold d-flex justify-content-center form-label">Tên đăng nhập</label>
        <input type="text" class="form-control" id="username" name="username">
        <label for="password" class="fw-semibold d-flex justify-content-center form-label mt-2">Mật khẩu</label>
        <input type="password" class="form-control" id="password" name="password">
        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success mt-3 w-30">Đăng nhập</button>
        </div>
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
<?php } ?>