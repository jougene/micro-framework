<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Router.php';
require 'Request.php';

$config = require 'config.php';

$query = new QueryBuilder(
	Connection::make($config['database'])
);

$router = new Router();
