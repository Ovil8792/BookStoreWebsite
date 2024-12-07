<?php
include_once "pdo.php";

function sendC($name,$email,$content){
    $sql="INSERT INTO contact(name,email,content) VALUES ('$name','$email','$content')";
    return pdo_execute($sql);
}