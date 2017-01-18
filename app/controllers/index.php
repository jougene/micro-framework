<?php

$tasks = $query->selectAll('todos');

require 'app/views/index.view.php';
