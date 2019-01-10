<?php
    class  GetControler{
        public function GetPost(){
            require_once('models/userModel.php');
            $PostModel = new PostModel();
            $PostModel->GetPost();
        }
    }
?>