<?php 

require_once('../views/menu.php');

class menu_controller{
    public function afficherMenu(){
         $v= new menu_view();
         $v-> menu();
     }
    }
    
   
   