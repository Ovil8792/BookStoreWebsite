<?php
    $dburl = "mysql:host=localhost;dbname=webbansach;charset=utf8";
    $username = 'root';
    $password = '';
try{
    $conn = new PDO($dburl, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Kết nối thất bại: " . $e->getMessage();
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form đăng nhập
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        // Sử dụng Prepared Statements để tránh SQL Injection
        $sql = "SELECT * FROM tai_khoan WHERE username_cli = :username AND password_cli = :password";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        // Kiểm tra kết quả
        if ($stmt->rowCount() > 0) {
            // Đăng nhập thành công
            session_start();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if($user['role'] == 'admin') {
            $_SESSION['admin']=$user ;
            echo "Đăng nhập thành công";
            // var_export($_SESSION['admin']);
            header("Location:index.php");
            }else{
                session_abort();
                session_unset();

                echo "Bạn ko phải admin, vui lòng về lại trang client";
            }
        } else {
            // Sai thông tin đăng nhập
            echo "Tên đăng nhập hoặc mật khẩu không đúng.";
        }
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Login(admin only)</title>
</head>
<style>
.ct{
    margin: 50px auto;
    width: 500px;
    padding: 20px;
    background: rgba(2,110,10,0.3);
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}
#cen{
    display: flex;
    text-align: center;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: black;
    font-size: 20px;
}
#ka{
    margin-top: 20px;
    cursor: pointer;
    color: white;
    background: #4CAF50;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    text-decoration: none;
    transition: background-color 0.3s;
}
</style>
<body>
    <div class="row ct">
        <div class="col-12">
                <form action="dangnhap.php" method="POST">
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