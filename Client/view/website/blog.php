<body>
<?php
require_once('../model/model.php');
require_once('../view/base_header.php');

//call header

//home class

class blog_view{
public function blog(){
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
    
<div class="register-form">
<div class="signin-content">
<div class="form-group form-button">

<h4> Blog de notre site </h4>
<section id="services">

  
      

        <?php 
      
      try {
     
           $ct = new blog_controller();
           $qtm=$ct->get_blog_controller();
           
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

