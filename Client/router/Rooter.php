<?php
require_once('../controller/accueilController.php');
require_once('../controller/accessController.php');





$c = new accueil_controller();
$c ->  afficherEntete();

$c = new accueil_controller();
$c ->  afficherHome();

$c = new accueil_controller();
$c ->  afficherBas();
