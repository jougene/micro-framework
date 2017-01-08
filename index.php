<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'core/bootstrap.php';

$routes = require 'routes.php';
die(var_dump($_SERVER['REQUEST_URI']));


// Мы должны получить на вход маршрут, и выполнить соответствующее этому маршруту дейтвие
// Например, если мы принимаем '/', то 



