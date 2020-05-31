<body>
<?php
session_start();
require_once('../controller/accueilController.php');


//call header

//home class

class home_view{
public function formulaire(){
        ?>
   <!DOCTYPE html>
<html lang="en">
<head>
   

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

</head>
  
    



<div class="container">
    <div class="container droite">
       
       <div class="signin-content">
            

            <div class="register-form">
                <div class="form-group form-button">
<?php if(!isset($_SESSION['username'])){?>
                 <h4 class="form-title">Connexion/Inscription</h4>
                 <hr>
                <span></span>
                <hr>
                 <div class="form-group form-button">
                 <input type='button' value='connexion' id='myButton' onClick='redirectOnClick()' />
                 <script>
function redirectOnClick(){
    document.location ='loginRooter.php';
}
</script>
                    
                    </div>
                    <div class="form-group form-button">
                 <input type='button' value='inscription' id='myButton' onClick='redirectOnClickk()' />
                 <script>
function redirectOnClickk(){
    document.location ='registerRooter.php';
}
</script>
                    
                    </div>
                <?php } ?>
                <h4 class="form-title">Demande de devis de traduction</h4>
                <hr>
                <span></span>
                <hr>
                <form method="POST" class="register-form" >

                    <div class="form-group">
                      
                        <input type="text"  id="nom" placeholder="vote nom "/>
                    </div>

                    <div class="form-group">
                      
                        <input type="text"  id="prenom" placeholder="vote prenom"/>
                    </div>

                    <div class="form-group">
                       
                        <input type="text"  id="numero" placeholder="vote numéro de téléphone"/>
                    </div>

                    <div class="form-group">
                        
                        <input type="text" id="mail" placeholder="vote mail"/>
                    </div>
                    <div class="form-group">
                        
                        <input type="text"  id="adresse" placeholder="vote adresse"/>
                    </div>
                        <div class="form-group">
                    


                    <p>Langue d'origine --<select>
                        <option value="0">FR</option>
                        <option value="1">En</option>
                        <option value="2">Ar</option>
                        <option value="3">ES</option>
                        <option value="4">AL</option>
  
                    </select></p>  
                    
                     
                         </div>
                    <div class="form-group">
                        
                    <p>Langue source--<select>
                        <option value="0">FR</option>
                        <option value="1">En</option>
                        <option value="2">Ar</option>
                        <option value="3">ES</option>
                        <option value="4">AL</option>
                
                    </div>
                    <div class="form-group">
                      


                    <p>Type de traduction<select>
                        <option value="0">Général   </option>
                        <option value="1">Scientifique</option>
                        <option value="2">Site Web</option>
                       
  
                    </select></p>
                    </div>
                    <div class="form-group">
</br>
                    <textarea id="comm" name="comm" placeholder="Vos commentaires.." style="height:50px"></textarea>
                    </div>
                   
                      
                    <div class="form-group">
</br>
                    <textarea id="comm" name="comm" placeholder="Vos demande spécifique.." style="height:50px"></textarea>
                    </div>
                   
                    <div class="form-group">
                      


                      <p> Voulez vous un traducteur assermenté?<select>
                          <option value="0">Oui </option>
                          <option value="1">Non</option>
                       
                         
    
                      </select></p>
                      </div>
                      <div class="form-group">
                      <p>votre fichier :</p>
                      
                        <input type="file"id="file" name="file" >
                            
                    </div>
                    <div class="form-group">
                    <input type='button' value='valider' id='myButton' onClick='redirectOnClickkk()' />
                 <script>
function redirectOnClickkk(){
    <?php if(!isset($_SESSION['username'])){?>
    document.location ='loginRooter.php';
    } else { 
        document.location ='loginRooter.php'; 
    }
  <?php  } ?>

</script>
                     </div>
                     </form>
                     </div> </div>
          
        </div>
   </div>
   


<div class="container gauche">
    
<div class="register-form">
<div class="signin-content">
<div class="form-group form-button">

<h4> Description de notre site</h4>
<section id="services">

  
      

        <?php 
      
      try {
     
           $ct = new accueil_controller();
           $qtm=$ct->get_article_controller();
           
           foreach($qtm as $rowm){
             ?>
            <article>
            <div class="divider">
                <hr>
                <span></span>
                <hr>
            </div>
            <header>
                <h5>
                <?php
               echo $rowm["name"];
               ?>
               </h5>
              
                <img src="<?php echo $rowm["image"] ?>" >
            </header>
               <details>
               <p><?php echo $rowm["description"] ;?></p>
           </details>
           
           </article>
           <?php
           }
           
       } catch(Exception $e){
        echo'erreur'.$e->getMessage();
        
       }
         ?>

           
       
  
</section>
</div>
</div>
</div>
</div>
</div>
<?php
    }
}
?>




