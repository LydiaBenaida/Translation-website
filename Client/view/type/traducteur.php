<body>
<?php

require_once('../controller/traducteurController.php');
//call header

//home class

class traducteur_view{
public function traducteur(){
        ?>
   <!DOCTYPE html>
<html lang="en">
<head>


    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
</head>
  
<div class="main">
<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">

<div class="form-group form-button">


<h4> Traducteurs</h4>
<section id="services">
<table class="darkTable">
<thead>
<tr>
<th>nom</th>
<th>prenom</th>
<th>telephone</th>
<th>fax</th>
<th>type de traduction</th>

</tr>
</thead>
<?php 
   
      try {
     
           $ct = new traducteur_controller();
           $qtm=$ct->get_users();
           ?>
          
          <?php
           foreach($qtm as $rowm){
             ?>
            
           
          
   

<tbody>
<tr>
           <td>   <?php echo $rowm["nom"];  ?>    </td>
           <td>   <?php    echo $rowm["prenom"];?></td>
           <td>   <?php  echo $rowm["telephone"];?></td>
           <td>   <?php  echo $rowm["fax"];?>      </td>
           <td>   <?php  echo $rowm["type"]; ?>    </td>

        </tr>
           <?php
           }
           
       } catch(Exception $e){
        echo'erreur'.$e->getMessage();
    
       }
           
       ?>
       </tbody>
</table>
       </div>  
</div>
</div>
</div>

</section>

</div>  
<?php
    }
}
?>

