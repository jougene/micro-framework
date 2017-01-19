<?php 

$router->get('', 'app/controllers/index.php');
$router->get('about', 'app/controllers/about.php');
$router->post('task', 'app/controllers/add-name.php');