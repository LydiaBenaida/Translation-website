<?php 

require_once('../views/gestionClient.php');
require_once('../views/modifieClient.php');
require_once('../models/clientModel.php');
require_once('../models/accessModel.php');
class client_controller{
   
    public function afficherClient()
    {
        $v= new client_view();
        $v-> client();
    
      
        
    }
    public function afficherModifie()
    {
        $v= new modifie_view();
        $v-> modifie();
    
      
        
    }


    public function get_client(){
        $mtf= new access_model();
        $r=$mtf->add_client();
        return $r;
    }
    public function deleteClient(){
        $mtf= new client_model();
        $r=$mtf->delete_client();
        return $r;
    }
    public function modifieClient(){
        $mtf= new client_model();
        $r=$mtf->modifie_client();
        return $r;
    }
    public function blockClient(){
        $mtf= new client_model();
        $r=$mtf->block_client();
        return $r;
    }
    public function changeClient(){
        $mtf= new client_model();
        $r=$mtf->change_client();
        return $r;
    }
}
    
