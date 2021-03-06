<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php';

require 'core/bootstrap.php';

use App\Core\Router;
use App\Core\Request;

Router::load('app/routes.php')
	->direct(Request::uri(), Request::method());
