<?php
include_once "../BookStoreWebsite/model/DanhMuc.php";

class DaMu{

public function getlistDM(){
    $listDaMu = getDM();
    return $listDaMu;
}
}