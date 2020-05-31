<?php 

require_once('../view/type/traducteur.php');

require_once('../model/accessModel.php');
class traducteur_controller{
   
    public function afficherTraducteur()
    {
        $v= new traducteur_view();
        $v-> traducteur();
    
      
        
    }
   

    public function get_users(){
        $mtf= new access_model();
        $r=$mtf->add_user();
        return $r;
    }
}
    
