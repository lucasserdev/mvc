<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addAction');

$router->get('/usuario/{id}/edit', 'UsuariosController@edit');
$router->post('/usuario/{id}/edit', 'UsuariosController@editAction');

$router->get('/usuario/{id}/del', 'UsuariosController@del');