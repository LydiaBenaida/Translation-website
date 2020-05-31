
<?php 
class menu_view{
public function menu(){
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
 
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    
    <div class="main-panel">
 
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          
         
            
          
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              
            </form>
            <ul class="navbar-nav">
            
             
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">logout</i>
                  <p class="d-lg-none d-md-block">
                    Deconnexion
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
              
                <div class="card-body">
               
                
                  <li class="nav-item ">
            <a class="nav-link" href="traducteurRooter.php">
              <i class="material-icons">person</i>
             
            </a>
          </li>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     Gestion des traducteurs
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
              
                <div class="card-body">
               
                
                  <li class="nav-item ">
            <a class="nav-link" href="clientRooter.php">
              <i class="material-icons">person</i>
             
            </a>
          </li>
                </div>
                <div class="card-footer">
                  <div class="stats">
                   Gestion des clients
                  </div>
                </div>
              </div>
            </div>
            </div>


            <div class="row">
            
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
              
                <div class="card-body">
               
                
                  <li class="nav-item ">
            <a class="nav-link" href="docRooter.php">
              <i class="material-icons">library_books</i>
             
            </a>
          </li>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    Gestion des documents
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
              
                <div class="card-body">
               
                
                  <li class="nav-item ">
            <a class="nav-link" href="dashRooter.php">
              <i class="material-icons">dashboard</i>
             
            </a>
          </li>
                </div>
                <div class="card-footer">
                  <div class="stats">
              Dashboard
                  </div>
                </div>
              </div>
            </div>
            </div>

            <div class="row">
            
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
              
                <div class="card-body">
               
                
                  <li class="nav-item ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">bubble_chart</i>
             
            </a>
          </li>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    Wordpress
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