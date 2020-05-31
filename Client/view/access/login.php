<?php 
class login_view{
public function login(){
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


        <!-- Sing in  Form -->
        <section class="signin">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../public/img/bussines-1.jpg" alt="sing up image"></figure>
           
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Connexion</h2>
                        <form method="POST" class="login-form" id="login-form"  action="checkRooter.php">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nom" id="nom" placeholder="vote nom d'utilisateur"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="votre mot de passe"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Souviens de moi</label>
                            </div>
                            <div class="form-group form-button">
                                <button type="submit" name="signin" id="signin" class="form-submit"> connexion </button>
                            </div>
                            <b>You are not registered ?</b> <br></b><a href="registerRooter.php">Inscription ici</a><!--for centered text-->
                        </form>
                       
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