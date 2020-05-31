<?php 

require_once('../views/gestionTraducteur.php');
require_once('../views/modifieTra.php');
require_once('../models/accessModel.php');
require_once('../models/traducteurModel.php');
require_once('../models/changeModel.php');
class traducteur_controller{
   
    public function afficherTraducteur()
    {
        $v= new traducteur_view();
        $v-> traducteur();
    
      
        
    }
    public function afficherModifie()
    {
        $v= new modifie_view();
        $v-> modifie();
    
      
        
    }

    public function get_traducteur(){
        $mtf= new access_model();
        $r=$mtf->add_traducteur();
        return $r;
    }
    public function get_profile(){
        $mtf= new traducteur_model();
        $r=$mtf->profile_traducteur();
        return $r;
    }
    public function deleteTraducteur(id){
        $mtf= new traducteur_model();
        $r=$mtf->delete_traducteur();
        return $r;
    }
    public function modifieTraducteur(){
        $mtf= new traducteur_model();
        $r=$mtf->modifie_traducteur();
        return $r;
    }
    public function blockTraducteur(){
        $mtf= new traducteur_model();
        $r=$mtf->block_traducteur();
        return $r;
    }

    public function changeTraducteur (){
        $mtf= new change_model();
        $r=$mtf->change_user();
        return $r;
    }
    
}
    
