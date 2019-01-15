<?php
include('database.php');
class M_lines extends database{
    function getMenu(){
        $sql = "SELECT * FROM menu";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>