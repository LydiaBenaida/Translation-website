<?php 

require_once('../views/user.php');

require_once('../models/accessModel.php');
class access_controller{
    public function afficherLogin(){
         $v= new login_view();
         $v-> login();
     }
    
    public function check_controller (){
        $mtf= new access_model();
        $r=$mtf->check_user();
        return $r;
    }
    
}