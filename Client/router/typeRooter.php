<?php
require_once('../controller/accueilController.php');

require_once('../controller/typeController.php');




$c = new accueil_controller();
$c ->  afficherEntete();
$c = new type_controller();
$c ->  afficherType();


$c = new accueil_controller();
$c ->  afficherBas();
