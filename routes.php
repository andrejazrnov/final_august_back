<?php


$router->get('','PagesController@home');
$router->get('movies', 'MoviesController@index');
$router->get('movies/create', 'MoviesController@create');
$router->post('movies/create', 'MoviesController@store');
$router->get('movies/show', 'MoviesController@show');
$router->get('movies/edit', 'MoviesController@edit');
$router->post('movies/edit', 'MoviesController@update');
$router->get('movies/destroy', 'MoviesController@destroy');


$router->get('api/movies', 'ApiMoviesController@index');
$router->post('api/movies', 'ApiMoviesController@store');
$router->get('api/movies/show', 'ApiMoviesController@show');
$router->post('api/movies/edit', 'ApiMoviesController@update');
$router->get('api/movies/destroy', 'ApiMoviesController@destroy');



$router->get('users', 'UsersController@index');
$router->get('users/create', 'UsersController@create');
$router->post('users/create', 'UsersController@store');
$router->get('users/show', 'UsersController@show');
$router->get('users/edit', 'UsersController@edit');
$router->post('users/edit', 'UsersController@update');
$router->get('users/destroy', 'UsersController@destroy');


$router->get('api/users', 'ApiUsersController@index');
$router->post('api/users', 'ApiUsersController@store');
$router->get('api/users/show', 'ApiUsersController@show');
$router->post('api/users/edit', 'ApiUsersController@update');
$router->get('api/users/destroy', 'ApiUsersController@destroy');




$router->get('forms', 'FormsController@index');



$router->get('api/forms', 'ApiFormsController@index');



$router->get('messages', 'MessagesController@index');



$router->get('api/messages', 'ApiMessagesController@index');


$router->get('login', 'AuthController@login_form');
$router->post('login', 'AuthController@login');
$router->get('register', 'AuthController@register_form');
$router->post('register', 'AuthController@register');
$router->get('logout', 'AuthController@logout');

$router->get('contact', 'PagesController@contact');





