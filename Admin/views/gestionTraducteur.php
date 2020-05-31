<body>
<?php

require_once('../controllers/traducteurController.php');

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
class traducteur_view{
public function traducteur(){
  ?>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" >
      
      <div class="logo"><a  class="simple-text logo-normal">
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
              <i class="material-icons">Word</i>
              <p>WordPress</p>
            </a>
          </li>
    
        </ul>
      </div>
    </div>
    <div class="main-panel">
 
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Table Liste</a>
          </div>
         
        
      </nav>
   
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Gestion des traducteurs</h4>
               
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="recherche par nom..">
              
                  <table class="table table-hover" id="myTable">
                      <thead class="">
                <tr>      <th>
                          ID
                        </th>
                        <th onclick="sortTable(0)">
                          Nom
                        </th>
                        <th onclick="sortTable(1)">
                          Prenom
                        </th>
                        <th onclick="sortTable(2)">
                          Wilaya
                        </th>
                        <th onclick="sortTable(3)">
                         Commune
                        </th>
                        <th onclick="sortTable(4)">
                          Adresse
                         </th>
                         <th onclick="sortTable(5)">
                          Téléphone
                         </th>
                         <th onclick="sortTable(6)">
                          Fax
                         </th>
                         <th onclick="sortTable(7)">
                          Type
                         </th>
                         <th onclick="sortTable(8)">
                          Bloquer
                         </th></tr>
                      </thead>
                   
                      <tbody>
          <?php 
   
           try {
     
           $ct = new traducteur_controller();
           $qtm=$ct->get_traducteur();
           ?>
          
          <?php
           foreach($qtm as $rowm){
             ?>
            
                     
            <form methos="POST" id="form1">

                        <tr >
                          <td name="i">
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
                            <td>
                             
                            <button form="form1" type="submit" name="signin" id="signin" class="btn btn-primary pull-right" action='redirectOnClickkk()'> supprimer </button>
                          
                            </td>

                      
                        </tr>
                       
                        <?php
           }
           
       } catch(Exception $e){
        echo'erreur'.$e->getMessage();
    
       }
           
       ?>    
                       
                       
                        
                      </tbody>
      
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  
  dir = "asc";
 
  while (switching) {
  
    switching = false;
    rows = table.rows;
  
    for (i = 1; i < (rows.length - 1); i++) {
      
      shouldSwitch = false;
     
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
     
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
       
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
       
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
     
      switchcount ++;
    } else {
    
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

                      <script>

function myFunction() {
 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  
  for (i =0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    
    if (td) {
      txtValue = td.textContent || td.innerText;
 
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
                    </table>
                     </form>
                    
            <div class="col-md-12">
              <div class="card card-plain">
                

<form method="POST" class="login-form" id="login-form"  action="modifieTra.php">
<div class="col-md-6">
                      <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="id" id="nom" class="form-control" placeholder="ID de l'utilisateur"/>

                         
                                <button type="submit" name="signin" id="signin" class="btn btn-primary pull-right" onClick='redirectOnClick()'> Afficher Profile</button>
                                </div>
                       </div>
                           
  </form> 
                              

  <form method="POST" class="login-form" id="login-form"  action="blockTra.php">
  <div class="col-md-6">
                      <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="id" id="nom" class="form-control" placeholder="ID de l'utilisateur"/>

                         
                           
                           
                                <button type="submit" name="signin" id="signin"   class="btn btn-primary pull-right"> bloquer </button>
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