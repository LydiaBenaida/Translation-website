<?php 

require_once('../views/gestionDoc.php');

require_once('../models/accessModel.php');
require_once('../models/docModel.php');

class doc_controller{
   
    public function afficherdoc()
    {
        $v= new doc_view();
        $v-> doc();
    
      
        
    }
    

    public function get_doc(){
        $mtf= new access_model();
        $r=$mtf->add_doc();
        return $r;
    }
    public function deletedoc(){
        $mtf= new doc_model();
        $r=$mtf->delete_doc();
        return $r;
    }
   
}
    
