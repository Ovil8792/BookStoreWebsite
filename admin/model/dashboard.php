<?php

function listHoDo(){
    $sql="SELECT * FROM hoadon";
    return pdo_query($sql);
}
    // function getRevByDate($date){
    //     $sql="SELECT SUM(tongtien) as Rev FROM hd WHERE ";
    // }
    function DailyRev($listHD){
        $curDate= date('Y-m-d');

        $totalRev=0;

        foreach($listHD as $hd){
            $createAt= $hd['create_at'];
            if($hd['tinhtrang']=="Đã hoàn thành"&& $createAt == $curDate){
                $totalRev+=$hd['total'];
            }
        }
        return $totalRev;
    }
function WeekRev($listHD){
$start=date('y-m-d',strtotime('monday this week'));
$end=date('y-m-d');

    $totalRev=0;

    foreach($listHD as $hd){
        $createAt=substr($hd['create_at'],0,10);
        if($hd['tinhtrang']=="Đã hoàn thành" && $createAt >=$start && $createAt <= $end){
            $totalRev+=$hd['total'];
        }
    }
    return $totalRev;
}
function MonthRev($listHD) {
    // Lấy tháng hiện tại (Y-m)
    $currMonth = date('Y-m');

    $totalRev = 0;

    // Duyệt qua mảng `$listhd`
    foreach ($listHD as $hd) {
        // Kiểm tra trạng thái và tháng của `created_at`
        $createdAt = substr($hd['create_at'], 0, 7); // Lấy tháng (Y-m)
        if ($hd['tinhtrang']=="Đã hoàn thành" && $createdAt == $currMonth) {
            $totalRev += $hd['total'];
        }
    }

    return $totalRev;
}
function CMT(){
    $sql="SELECT * from binhluan ORDER BY id DESC LIMIT 4";
    return pdo_query($sql);
}
function ShowContact(){

}
function ShowUsers(){
    $sql = "SELECT * FROM tai_khoan";
    return pdo_query($sql);
}
