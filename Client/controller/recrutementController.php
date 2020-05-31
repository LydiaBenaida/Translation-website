<?php 

require_once('../view/access/recrutement.php');
    
require_once('../model/recModel.php');
class recrutement_controller{
    public function afficherRecrutement()
    {
        
        
      
   

        $v= new recrutement_view();
        $v-> recrutement();
     
       
        
    }
}