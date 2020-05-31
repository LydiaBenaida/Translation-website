<?php
require_once('../controller/accueilController.php');

require_once('../controller/aproposController.php');




$c = new accueil_controller();
$c ->  afficherEntete();
$c = new apropos_controller();
$c ->  afficherApropos();

$c = new accueil_controller();
$c ->  afficherBas();