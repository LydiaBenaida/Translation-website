<?php

class traducteur_model{
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

  
  
    public function  delete_traducteur(){
      
        $c=mysqli_connect("localhost","root","","sitetraduction");
        mysqli_select_db($c,'sitetraduction');
      
        $id=$_POST['id'];



        $user="delete  from traducteur where id='$id'";
        $r=$this->requete($c,$user);
       
       
        require_once('traducteurRooter.php');
      
        
      
        $this->deconnexion($c);
       
    
    }
    public function  modifie_traducteur(){
      
        $c=mysqli_connect("localhost","root","","sitetraduction");
        mysqli_select_db($c,'sitetraduction');
  
        $id=$_POST['id'];
        

        $user="select * from traducteur where id='$id'";
        
        $r=$this->requete($c,$user);
      
       
    
        $this->deconnexion($c);
        return $r;
       
    
    }
    public function  profile_traducteur(){
      
        $c=mysqli_connect("localhost","root","","sitetraduction");
        mysqli_select_db($c,'sitetraduction');
  
      
        $id=$_POST['id'];
      

        $user="select nom,prenom from traducteur where id='$id'";
        $r=$this->requete($c,$user); 
        $ct = new traducteur_controller();
        $qtm=$ct->get_profile();
        ?>
       
       <?php
        foreach($qtm as $rowm){
        
         
    

        $profile="select * from devis where nom='$id' ";




       
      
       
    
        $this->deconnexion($c);
        return $r;
       
    
    }
}
    public function  block_traducteur(){
      
        $c=mysqli_connect("localhost","root","","sitetraduction");
        mysqli_select_db($c,'sitetraduction');
  
        $id=$_POST['id'];
      
      
       
        $user="update  traducteur set bloquer='oui'  where id='$id'";
        $r=$this->requete($c,$user);
       
        require_once('traducteurRooter.php');
        
      
        $this->deconnexion($c);
        return $r;
       
    
    }
  
    
  
   
}
?>