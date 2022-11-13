<?php

$router->get("","PagesController@home");
$router->get('about','PagesController@about');

$router->get('todos','TodoController@index');
$router->post('new-todo','TodoController@store');