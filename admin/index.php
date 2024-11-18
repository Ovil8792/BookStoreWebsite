<?php

if (isset($_GET['act']) && $_GET['act'] != '') {
    $action = $_GET['act'];
    switch($action) {
        case "listdanhmuc":
            include_once 'view/danhmuc/index.php';
            break;
    }
} else {
    include_once 'view/dashboard/index.php';
}