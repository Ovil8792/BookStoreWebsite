<?php
include_once $_SERVER['DOCUMENT_ROOT']."/admin/model/dashboard.php";
function dashboardShow() {
$listhd = listHoDo();

$listCMT= CMT();
$listUser = ShowUsers();
$monthRev = MonthRev($listhd);
$dayRev = DailyRev($listhd);
$weekRev = WeekRev($listhd);

foreach ($listCMT as $key => $value) {
    $clientName = 'Không xác định';
    $avt = 'Không xác định'; // Giá trị mặc định
    foreach ($listUser as $key => $client) {
        if ($client['id_user'] == $value['id_taikhoan']) {
            $clientName = $client['ho_ten'];
            $avt=$client['avatar'];
            break;
        }
    }

}
include_once $_SERVER['DOCUMENT_ROOT']."/admin/view/dashboard/index.php";
}