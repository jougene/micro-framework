<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'core/bootstrap.php';

$routes = require 'routes.php';

$router->direct();



