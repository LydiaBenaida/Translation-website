<?php 
require_once('../view/base_header.php');
require_once('../view/home/home.php');
require_once('../model/model.php');
class accueil_controller{
    public function afficherEntete()
    {
        $v= new head_view();
        $v-> entetePage();
    
      
        
    }
   
    public function afficherBas()
    {
        $v= new head_view();
        $v-> basPage();
    
      
        
    }
    public function afficherHome()
    {
        $v= new home_view();
        $v-> formulaire();
    
      
        
    }
    //affichage profile
    public function afficherProfile()
    {
        $v= new profile_view();
        $v->profile();
    
      
        
    }
    public function afficherEnteteProfile()
    {
        $v= new head_view();
        $v-> entetePage();
    
      
        
    }
    public function afficherBasProfile()
    {
        $v= new head_view();
        $v-> basPage();
    
      
        
    }

    public function get_menu_controller (){
        $mtf= new accueil_model();
        $r=$mtf->get_menu();
        return $r;
    }
    public function get_article_controller (){
        $mtf= new accueil_model();
        $r=$mtf->get_article();
        return $r;
    }

    

}

?>