<?php

class access_model{
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

  
    public function  register_user(){
        $c=mysqli_connect("localhost","root","","sitetraduction");
        mysqli_select_db($c,'sitetraduction');
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $wilaya=$_POST['wilaya'];
        $commune=$_POST['commune'];
        $adresse=$_POST['adresse'];
        $telephone=$_POST['telephone'];
        $fax=$_POST['fax'];

        $password=$_POST['pass'];


        $user="select * from client where nom='$nom'   ";
        $r=$this->requete($c,$user);
 
        $num=mysqli_num_rows($r);
        if($num==1){
            echo"utilisateur deja exister";
            require_once('registerRooter.php');

        }else{

      $reg="   INSERT INTO client(nom,prenom,wilaya,commune,adresse,telephone,fax,password) VALUES ('$nom','$prenom','$wilaya','$commune','$adresse','$telephone','$fax','$password')";
      echo $reg;

     mysqli_query($c,$reg);
      require_once('loginRooter.php');


        }
      
       
       
    
    }
    public function  check_user(){
      
        $c=mysqli_connect("localhost","root","","sitetraduction");
        mysqli_select_db($c,'sitetraduction');
        $nom=$_POST['nom'];
      

        $password=$_POST['password'];


        $user="select * from client where nom='$nom' && password='$password'  ";
        $r=$this->requete($c,$user);
       
       
        
      
        if(mysqli_num_rows($r)==1){
            session_start();
            $_SESSION['username']=$nom;
            header('Location: ..\router\Rooter.php');
        }else{
            require_once('loginRooter.php');
        }
      
        $this->deconnexion($c);
       
    
    }
    public function  add_user(){
      
        $c=mysqli_connect("localhost","root","","sitetraduction");
        mysqli_select_db($c,'sitetraduction');
  
      
      
      

        $user="select * from traducteur ";
        $r=$this->requete($c,$user);
       
       
        
      
        $this->deconnexion($c);
        return $r;
       
    
    }

  
   
}
?>