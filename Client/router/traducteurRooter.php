<?php
require_once('../controller/accueilController.php');

require_once('../controller/traducteurController.php');




$c = new accueil_controller();
$c ->  afficherEntete();
$c = new traducteur_controller();
$c ->  afficherTraducteur();


$c = new accueil_controller();
$c ->  afficherBas();
