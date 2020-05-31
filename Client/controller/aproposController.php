<?php 

require_once('../view/website/apropos.php');
    

class apropos_controller{
    public function afficherApropos()
    {
        
        
      
   

        $v= new apropos_view();
        $v-> apropos();
     
       
        
    }
}