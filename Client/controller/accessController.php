<?php 

require_once('../view/access/login.php');
require_once('../view/access/registre.php');
require_once('../model/accessModel.php');
class access_controller{
    public function afficherLogin(){
         $v= new login_view();
         $v-> login();
     }
     public function afficherRegister(){
        $v= new register_view();
       $v-> register();
    }
    public function check_controller (){
        $mtf= new access_model();
        $r=$mtf->check_user();
        return $r;
    }
    public function register_controller (){
        $mtf= new access_model();
        $r=$mtf->register_user();
        return $r;
    }
}

