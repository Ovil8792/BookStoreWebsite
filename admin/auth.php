<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/model/user.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Lấy dữ liệu từ form đăng nhập
        $username = $_POST['username'];
        $password = $_POST['password'];


        $result = getUser($username);
        //var_export($result);
        $hpw = $result['password_cli'];
        // Kiểm tra kết quả


        if (isset($result) && (password_verify($password, $hpw))) {
            // Đăng nhập thành công
            session_start();

            if ($result['role'] == 'admin' || $result['role'] == 'coAD') {
                $_SESSION['admin'] = $result;
                echo "Đăng nhập thành công";
                // var_export($_SESSION['admin']);
                header("Location:index.php");
            } else {
                session_destroy();
                unset($_SESSION['admin']);

                echo "<script>alert('Bạn ko phải admin, vui lòng về lại trang client')
                window.location='/admin/'</script>";
            }
        } else {
            // Sai thông tin đăng nhập
            echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng.')</script>";
        }

    }
}