
<?php 
class login_view{
public function login(){
    ?>

<!DOCTYPE html>
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
<div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Connexion</h4>
                 
                </div>
                <div class="card-body">
                  <form method="POST" action="checkRooter.php">
                  
                     
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nom d'utilisateur</label>
                          <input type="text"  name ="username" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating" >Mot de passe</label>
                          <input  type="password" name="password" class="form-control">
                        </div>
                      </div>
                     
                    
                   
                  
                    
                   
                    <button type="submit" class="btn btn-primary pull-right" onClick='redirectOnClick()'>Connexion</button>
                    <script>
function redirectOnClick(){
    <?php if(!isset($_SESSION['username'])){?>
    document.location ='loginRooter.php';
    } else { 
        document.location ='menuRooter.php'; 
    }
  <?php  } ?>

</script>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           <?php 
}
}