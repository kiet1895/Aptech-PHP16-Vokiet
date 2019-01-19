<?php
include('model/m_Line.php');
class C_lines{
    public function index(){
        $m_line = new M_lines();
        $menu =  $m_line->getMenu();
        $menu2 = $m_line->GetMenu2();
        return array('menu'=>$menu,'menu2'=>$menu2);
    }
}
?>