
<?php 

require_once('../controllers/clientController.php');


class modifie_view{
public function modifie(){
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard Dark Edition by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
 
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
   
    <div class="main-panel">
 
      
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">modifier profile</h4>
                  
                </div>
                <div class="card-body">
                  <form method="POST" action="changeClient.php">
                  <?php 
   
   try {
     
    $ct = new client_controller();
    $qtm=$ct->modifieClient();
    ?>
    <?php
           foreach($qtm as $r){
             ?>
            
   
                    <div class="row">
                      
                     
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">id</label>
                          <input type="text"  name="id" class="form-control" value="  <?php echo $r["id"];  ?>  " disable> 
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">nom</label>
                          <input type="text"  name="nom" class="form-control" value="  <?php echo $r["nom"];  ?>  "> 
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">prenom</label>
                          <input type="text" name="prenom"class="form-control" value="  <?php echo $r["prenom"];  ?>  ">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">wilaya</label>
                          <input type="text" name="wilaya"class="form-control" value="  <?php echo $r["wilaya"];  ?>  ">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">commune</label>
                          <input type="text" name="commune" class="form-control" value="  <?php echo $r["commune"];  ?>  ">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">adresse</label>
                          <input type="text" name="adresse"class="form-control" value="  <?php echo $r["adresse"];  ?>  ">
                        </div>
                      </div>

                      
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">telephone</label>
                          <input type="text" name="telephone"class="form-control"value="  <?php echo $r["telephone"];  ?>  ">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">fax</label>
                          <input type="text"name="fax" class="form-control" value="  <?php echo $r["fax"];  ?>  ">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">bloquer</label>
                          <input type="text"name="bloquer" class="form-control" value="  <?php echo $r["bloquer"];  ?>  ">
                        </div>
                      </div>
                    </div>
                    <?php
           }
           
       } catch(Exception $e){
        echo'erreur'.$e->getMessage();
    
       }
           
       ?>    
           
                    <button type="submit" class="btn btn-primary pull-right" >Modifier Profile</button>
                  
                    <div class="clearfix"></div>
                  </form>
                </div>
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