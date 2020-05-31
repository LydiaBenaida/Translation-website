
<?php



//call header

//home class

class recrutement_view{
public function recrutement(){
  
        ?>
   
   
   <!DOCTYPE html>
<html lang="en">
<head>
   

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">


         <!-- Sign up form -->
         <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Recrutement</h2>
                        <form method="POST" class="register-form" id="register-form" action="">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nom" id="nom" placeholder="Nom"/>
                            </div>

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="prenom" id="prenom" placeholder="Prenom"/>
                            </div>
                            <div class="form-group">
                        
                        <p>Langues--</p>
                        <select  style="width:100px; " multiple>
                            <option value="0">FR</option>
                            <option value="1">En</option>
                            <option value="2">Ar</option>
                            <option value="3">ES</option>
                            <option value="4">AL</option>
                    
                        </div>
                        <div class="form-group">
                                
                                <input type="text" name="wilaya" id="wilaya" placeholder="Wilaya"/>
                            </div>

                            <div class="form-group">
            
                                <input type="text" name="commune" id="commune" placeholder="Commune"/>
                            </div>
                            <div class="form-group">
                           
                                <input type="text" name="adresse" id="adresse" placeholder="Adresse"/>
                            </div>
                            <div class="form-group">
                               
                                <input type="text" name="telephone" id="telephone" placeholder="Téléphone"/>
                            </div>
                            <div class="form-group">
                              
                                <input type="text" name="fax" id="fax" placeholder="Fax"/>
                            </div>


                            
                            <div class="form-group">
                        
                        <p>Type de traduction--</p>
                        <select  style="width:100px; " multiple>
                            <option  name="type" value="0">général</option>
                            <option name="type" value="1">spécifique</option>
                            <option name="type" value="2">site web</option>
                          
                    
                        </div>

                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Mot de passe"/>
                            </div>

                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="repeter mot de passe"/>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>
J'accepte toutes les déclarations des conditions d'utilisation</label>
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Inscription"/>
                            </div>

                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../public/img/bussines-1.jpg "alt="sing up image"></figure>
                   
                    </div>
                </div>
            </div>
        </section>

    </div>

    
</body>
</html>




<?php
    }
}
?>

