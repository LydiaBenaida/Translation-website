<?php 

require_once('../view/t/traducteur.php');
    
require_once('../model/model.php');
class traducteur_controller{
    public function afficherTraducteur()
    {
        
        
      
   

        $v= new traducteur_view();
        $v-> traducteur();
     
       
        
    }
}