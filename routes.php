<?php 

$router->get('', 'PagesController@index');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('tasks', 'TaskController@index');
$router->post('tasks', 'TaskController@store');