<?php

class accueil_model{
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

    public function  get_menu(){
      
        $c=mysqli_connect("localhost","root","","sitetraduction");
        $qtf="select * from menu";
        $r=$this->requete($c,$qtf);
        $this->deconnexion($c);
        return $r;
      
    }
    public function  get_article(){
      
        $c=mysqli_connect("localhost","root","","sitetraduction");
        $article="select * from article";
      
       
        $n=$this->requete($c,$article);
        $this->deconnexion($c);
        return $n;
    
    }
   
}
?>