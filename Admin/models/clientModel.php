<?php

class client_model{
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

  
  
    public function  delete_client(){
    
        $c=mysqli_connect("localhost","root","","sitetraduction");
        mysqli_select_db($c,'sitetraduction');
        $id=$_POST['id'];
    
        $user="delete from client where id='$id'";
     
        $r=$this->requete($c,$user);
        require_once('clientRooter.php');
        $this->deconnexion($c);
       
    
    }

    public function  modifie_client(){
      
        $c=mysqli_connect("localhost","root","","sitetraduction");
        mysqli_select_db($c,'sitetraduction');
  
      
        $id=$_POST['id'];
      

        $user="select * from client where id='$id'";
      

        
        $r=$this->requete($c,$user);
       
       
        
      
        $this->deconnexion($c);
        return $r;
       
    
    }
    public function  block_client(){
      
        $c=mysqli_connect("localhost","root","","sitetraduction");
        mysqli_select_db($c,'sitetraduction');
        $id=$_POST['id'];
        $user="update  client set bloquer='oui' where id='$id'";
        $r=$this->requete($c,$user);
       
        require_once('clientRooter.php');
        
    
        $this->deconnexion($c);
        return $r;
       
    
    }
    
    public function  change_client(){
        $c=mysqli_connect("localhost","root","","sitetraduction");
        mysqli_select_db($c,'sitetraduction');
        $id=$_POST['id'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $wilaya=$_POST['wilaya'];
        $commune=$_POST['commune'];
        $adresse=$_POST['adresse'];
        $telephone=$_POST['telephone'];
        $fax=$_POST['fax'];
        $bloquer=$_POST['bloquer'];
      

        $user="update  client set  nom='$nom', prenom='$prenom', wilaya='$wilaya', commune='$commune', adresse='$adresse' ,telephone='$telephone' ,fax='$fax',  bloquer='$bloquer' where id='$id'";   
        $r=$this->requete($c,$user);
       
        require_once('clientRooter.php');
        
      
        $this->deconnexion($c);
        return $r;
     

  

        }
  
   
}
?>