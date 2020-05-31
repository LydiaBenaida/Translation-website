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

  
  
    public function  check_user(){
      
        $c=mysqli_connect("localhost","root","","sitetraduction");
        mysqli_select_db($c,'sitetraduction');
        $nom=$_POST['username'];
      

        $password=$_POST['password'];

echo "lydia";
        $user="select * from admin where username='$nom' && password='$password'  ";
        $r=$this->requete($c,$user);
       
       
        
      
        if(mysqli_num_rows($r)==1){
            session_start();
            $_SESSION['username']=$nom;
            header('Location: ..\rooters\menuRooter.php');
        }else{
            require_once('loginRooter.php');
        }
      
        $this->deconnexion($c);
       
    
    }
    public function  add_traducteur(){
      
        $c=mysqli_connect("localhost","root","","sitetraduction");
        mysqli_select_db($c,'sitetraduction');
  
      
      
      

        $user="select * from traducteur ";
        $r=$this->requete($c,$user);
       
       
        
      
        $this->deconnexion($c);
        return $r;
       
    
    }
    public function  add_client(){
      
        $c=mysqli_connect("localhost","root","","sitetraduction");
        mysqli_select_db($c,'sitetraduction');
  
      
      
      

        $user="select * from client ";
        $r=$this->requete($c,$user);
       
       
        
      
        $this->deconnexion($c);
        return $r;
       
    
    }
    
    public function  add_doc(){
      
        $c=mysqli_connect("localhost","root","","sitetraduction");
        mysqli_select_db($c,'sitetraduction');
  
      
      
      

        $user="select * from document";
        $r=$this->requete($c,$user);
       
       
        
      
        $this->deconnexion($c);
        return $r;
       
    
    }
  
   
}
?>