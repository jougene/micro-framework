<?php

$app['database']->insert('todos', $_REQUEST);

header('Location: /');