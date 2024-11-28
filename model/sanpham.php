<?php
include_once "pdo.php";
     function DSSP(){
        $sql = "SELECT * FROM san_pham";
        return pdo_query($sql);
    }

     function getSPById($id){
        $sql = "SELECT * FROM san_pham WHERE id_sp = '$id'";
        return pdo_query_one($sql);
    }
