<?php


    include_once "./model/pdo.php";
    include_once "./controller/User.php";
    include_once "./model/user.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!isset($_SESSION['admin'])){
        $usctl = new UserCTL();
        $usctl->login();
        var_export($_SESSION['admin']);
        }else{
            echo "đã có session";
            header("Location: index.php");
        exit();
        }   
    }

