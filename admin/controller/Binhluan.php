<?php
include_once $_SERVER['DOCUMENT_ROOT']."/admin/model/binhluan.php";

      function getBL(){  
        $listBL = listBinhLuan();
        require_once $_SERVER['DOCUMENT_ROOT']."/admin/view/binhluan/index.php";
      }

