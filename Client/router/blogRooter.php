<?php
require_once('../controller/accueilController.php');

require_once('../controller/blogController.php');



$c = new accueil_controller();
$c ->  afficherEntete();
$c = new blog_controller();
$c ->  afficherBlog();

$c = new accueil_controller();
$c ->  afficherBas();