<?php

App::get('database')->insert('todos', $_REQUEST);

header('Location: /');