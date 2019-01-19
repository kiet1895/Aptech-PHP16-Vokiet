<?php
include('model/m_user.php');
class C_user{
    public function dangnhap($email,$password){
        $m_user = new M_user();
        $user = $m_user->dangnhap($email,$password);
        // print_r($user);
        if($user == true){
            $_SESSION['user_name'] = $user->name;
            header('localhost:index.php');
            if(isset($_SESSION['user_error'])){
                unset($_SESSION['user_error']);
            }
        }else{
            $_SESSION['user_error']='sai thong tin dang nhap';
            header('localhost:index.php');
        }
    }
}
?>