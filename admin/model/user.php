<?php
     function listUsers(){
        $sql = "SELECT * FROM tai_khoan";
        return pdo_query($sql);
    }
