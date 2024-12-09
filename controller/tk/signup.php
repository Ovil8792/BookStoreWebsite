<?php
include_once $_SERVER['DOCUMENT_ROOT']."/model/taikhoan.php";

session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    $usn = $_POST['username'];
$Ipwd = $_POST['password'];
$pwd = password_hash($Ipwd,PASSWORD_DEFAULT);
register($usn,$pwd,'user');
$_SESSION['user']=["user"=>$usn,"pwd"=>$pwd];
echo "
<script>
alert('Đăng ký thành công!')
document.addEventListener('DOMContentLoaded',()=>{
setTimeout(()=>{window.location='index.php?act=ctnd'},300)
});
    
</script>
";
}
