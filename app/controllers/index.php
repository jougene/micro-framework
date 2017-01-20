<?php

$tasks = $app['database']->selectAll('todos');

require 'app/views/index.view.php';
