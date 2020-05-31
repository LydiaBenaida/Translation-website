<body>
<?php

require_once('../controllers/traducteurController.php');

?>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
 
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>
<?php
class profile_view{
public function profile(){
  ?>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" >
      
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
         Menu
        </a></div>
      <div class="sidebar-wrapper">
      <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="clientRooter.php">
              <i class="material-icons">person</i>
              <p>Gestion des clients</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="traducteurRooter.php">
              <i class="material-icons">person</i>
              <p>Gestion des traducteurs</p>
            </a>
          </li>
       
          <li class="nav-item ">
            <a class="nav-link" href="docRooter.php">
              <i class="material-icons">library_books</i>
              <p>Gestion des documents</p>
            </a>
          </li>
        
          <li class="nav-item ">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="wordpress.php">
              <i class="material-icons">bubble_chart</i>
              <p>WordPress</p>
            </a>
          </li>
    
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Table Liste</a>
          </div>
         
        
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Profile Détaillé du client </h4>
               
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                   
                  <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          Nom
                        </th>
                        <th>
                          Prenom
                        </th>
                        <th>
                          Telephone
                        </th>
                        <th>
                         Mail
                        </th>
                        <th>
                         Langue Origine
                         </th>
                         <th>
                         Langue Source
                         </th>
                         <th>
                         Commentaire
                         </th>
                         <th>
                         demande
                         </th>
                         <th>
                        Traducteur
                         </th>
                      </thead>
                   
                      <tbody>
          <?php 
   
           try {
     
           $ct = new traducteur_controller();
           $qtm=$ct->get_profile();
           ?>
          
          <?php
           foreach($qtm as $rowm){
             ?>
            
                     


                        <tr>
                          <td>
                          <?php echo $rowm["id"];  ?>  
                          </td>
                          <td>
                            <?php echo $rowm["nom"];  ?>  
                          </td>
                          <td>
                          <?php echo $rowm["prenom"];  ?>  
                          </td>
                          <td>
                          <?php echo $rowm["wilaya"];  ?>  
                          </td>
                          <td>
                          <?php echo $rowm["commune"];  ?>  
                          </td>
                          <td>
                          <?php echo $rowm["adresse"];  ?>  
                          </td>
                          <td>
                          <?php echo $rowm["telephone"];  ?>  
                          </td>
                          <td>
                          <?php echo $rowm["fax"];  ?>  
                          </td>
                          <td>
                          <?php echo $rowm["type"];  ?>  
                          </td>
                          <td>
                          <?php echo $rowm["bloquer"];  ?>  
                          </td>
                      
                        </tr>
                       
                        <?php
           }
           
       } catch(Exception $e){
        echo'erreur'.$e->getMessage();
    
       }
           
       ?>    
                       
                       
                        
                      </tbody>
      
                      
                    </table>
                     
              
              

                           
  </form> 
















                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
     

  
</body>

</html>
<?php
}

  

}