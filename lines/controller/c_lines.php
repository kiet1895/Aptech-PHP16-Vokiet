<?php
include('model/m_Line.php');
class C_lines{
    public function index(){
        $m_line = new M_lines();
        $menu =  $m_line->getMenu();
        return array('menu'=>$menu);
    }
}
?>