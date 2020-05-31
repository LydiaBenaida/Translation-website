<?php 

require_once('../view/type/type.php');
    
require_once('../model/model.php');
class type_controller{
    public function afficherType()
    {
        
        
      
   

        $v= new type_view();
        $v-> type();
     
       
        
    }
}