<?php 

$router->get('/', 'HomeController@index');
$router->get('/about', 'HomeController@about');
$router->post('/users', 'HomeController@users');
$router->post('/user', 'HomeController@store');
