



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./asset/css/style.css">
    <title>Login(admin only)</title>
</head>
<body>
    <div class="row ct">
        <div class="col-12">
                <form action="auth.php" method="POST">
        <div class="mb-3">
            <label for="username" id="cen" class="form-label">Tên Đăng Nhập</label>
            <input type="text" name="username" class="form-control" id="username">
        </div>
        <div class="mb-3">
            <label for="password" id="cen" class="form-label">Mật khẩu</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <button type="submit" id="ka" class="btn btn-primary">Đăng nhập</button>
    </form>
        </div>
    </div>

</body>

</html>