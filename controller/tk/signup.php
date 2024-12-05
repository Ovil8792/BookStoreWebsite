<?php
include_once $_SERVER['DOCUMENT_ROOT']."/model/taikhoan.php";

session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    $usn = $_POST['username'];
$pwd = $_POST['password'];
register($usn,$pwd,'user');
$_SESSION['user']=[$usn,$pwd];
echo "
<script>
alert('Đăng ký thành công!')
document.addEventListener('DOMContentLoaded',()=>{
setTimeout(()=>{window.location='index.php?act=ctnd'},1500)
});
    
</script>
";
}
