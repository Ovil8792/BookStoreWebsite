<?php 
//controller
include_once $_SERVER['DOCUMENT_ROOT']."/admin/model/hoadon.php";
$listhd = listHoaDon()



?>
<!-- html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>debug page</h1>
    <?php
    var_export($listhd);
    foreach($listhd as $a=>$b){
        echo $a."->".$b;
    }
    ?>
</body>
</html>
