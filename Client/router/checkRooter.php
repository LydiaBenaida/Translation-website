<?php
require_once('../controller/accueilController.php');
require_once('../controller/accessController.php');





$c = new access_controller();
$c ->  check_controller();
$c = new accueil_controller();
$c ->  afficherBas();
