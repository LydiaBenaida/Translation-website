<body>
<?php
require_once('../model/model.php');
require_once('../view/base_header.php');

//call header

//home class

class apropos_view{
public function apropos(){
        ?>
   <!DOCTYPE html>
<html lang="en">
<head>
   

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

</head>
  
    

<div class="main">
<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">

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
        ?>
            

<?php
       }
         ?>

           
       
</div>
</div>
</div>
</section>


</div>
<?php
    }
}
?>

