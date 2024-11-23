<?php
class HoaDon{
    public $table = "hoadon";
    public function ShowHoaDon(){
        $sql="SELECT * FROM $this->table";
        return pdo_query($sql);
    }
}