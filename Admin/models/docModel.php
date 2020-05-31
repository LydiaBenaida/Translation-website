<?php

class doc_model{
    private $dbname ="sitetraduction";
    private $host="localhost";
    private $user="root";
    private $password="";

   
    private function deconnexion (& $c){
        $c=null;
    }

    private function requete($c,$r){
        return $c-> query($r);
    }

  
  
    public function  delete_doc(){
      
        $c=mysqli_connect("localhost","root","","sitetraduction");
        mysqli_select_db($c,'sitetraduction');
      
        $id=$_POST['id'];



        $user="delete  from document where id='$id'";
        $r=$this->requete($c,$user);
       
       
        require_once('docRooter.php');
      
        
      
        $this->deconnexion($c);
       
    
    }

    
  
  
    
  
   
}
?>