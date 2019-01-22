<?php
class M_user extends database{
    function dangnhap($email,$md5_password){
        $sql="SELECT * FROM USER WHERE email ='$email' and password = '$md5_password'";
        $this->setQuery($sql);
        return $this->loadRow(array($email,$md5_password));
    }
}
?>