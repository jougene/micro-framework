<?php

$tasks = App::get('database')->selectAll('todos');

require 'app/views/index.view.php';
