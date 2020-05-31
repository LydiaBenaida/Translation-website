<?php

class blog_model{
    private $dbname ="sitetraduction";
    private $host="localhost";
    private $user="root";
    private $password="";

    private function connexion($dbname,$host,$user,$password){
        $dsn="mysql:dbname=$dbname; host=$host;";
        try{
            $c=new PDO($dsn,$user,$password);
            
        }
        catch(PDOException $ex){
            printf("erreur de la connexion à la base de donnée c",$ex->getMessage());
            exit();
        }
        return $c;
    }
   
    private function deconnexion (& $c){
        $c=null;
    }

    private function requete($c,$r){
        return $c-> query($r);
    }

  
    public function  get_blog(){
      
        $c=$this->connexion($this->dbname,$this->host,$this->user,$this->password);
        $blog="select * from blog";
      
       
        $n=$this->requete($c,$blog);
        $this->deconnexion($c);
        return $n;
    
    }
   
}
?>
