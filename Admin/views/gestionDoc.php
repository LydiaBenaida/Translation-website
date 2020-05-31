<body>
<?php

require_once('../controllers/docController.php');

?>
<html lang="en">

<head>
  <meta charset="utf-8" />
 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
 
 

  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>
<?php
class doc_view{
public function doc(){
  ?>



<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" >
      
      <div class="logo"><a class="simple-text logo-normal">
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
                  <h4 class="card-title mt-0"> Gestion des documents</h4>
                
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          Date de soumission
                        </th>
                        <th>
                          Type
                        </th>
                        <th>
                          Client
                        </th>
                        <th>
                         Traducteur
                        </th>
                        
                         <th>
                          Devis
                         </th>
                       
                      </thead>
                   
                      <tbody>
          <?php 
   
           try {
     
           $ct = new doc_controller();
           $qtm=$ct->get_doc();
           ?>
          
          <?php
           foreach($qtm as $rowm){
             ?>
            
                     


                        <tr>
                          <td>
                          <?php echo $rowm["id"];  ?>  
                          </td>
                          <td>
                            <?php echo $rowm["date_soumise"];  ?>  
                          </td>
                          <td>
                          <?php echo $rowm["type"];  ?>  
                          </td>
                          <td>
                          <?php echo $rowm["client"];  ?>  
                          </td>
                          <td>
                          <?php echo $rowm["traducteur"];  ?>  
                          </td>
                          <td>
                          <?php echo $rowm["devis"];  ?>  
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
                     
              
            <div class="col-md-12">
              <div class="card card-plain">
              <form method="POST" class="login-form" id="login-form"  action="deleteDoc.php">
                        <div class="col-md-6">
                      <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="id" id="nom" class="form-control"placeholder="ID du document"/>

                            
                                <button type="submit" name="signin" id="signin" class="form-submit" class="btn btn-primary pull-right"> supprimer </button>
                                </div>
                       </div>
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