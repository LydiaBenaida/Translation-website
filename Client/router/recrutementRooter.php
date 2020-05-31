<?php
require_once('../controller/accueilController.php');

require_once('../controller/recrutementController.php');




$c = new accueil_controller();
$c ->  afficherEntete();
$c = new recrutement_controller();
$c ->  afficherRecrutement();


$c = new accueil_controller();
$c ->  afficherBas();
