<?php
include('database.php');
class M_lines extends database{
    function getMenu(){
        $sql = "SELECT * FROM menu";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function GetMenu2(){
        $sql ="SELECT menu.*,GROUP_CONCAT(menulv2.id,':',menulv2.menu_2) as nhom  FROM menu JOIN menulv2 ON menu.id = menulv2.idMenu GROUP BY menu.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>