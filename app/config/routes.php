<?php

use Core\Router;

//public links
Router::add('index', '/index', '\App\Controllers\PixelsController', 'index');
Router::add('login', '/login', '\App\Controllers\Auth\LoginController', 'index');
Router::add('register', '/register', '\App\Controllers\Auth\RegisterController', 'index');
//user links
Router::add('add', '/add', '\App\Controllers\PixelsController', 'add');
Router::add('my', '/my', '\App\Controllers\Auth\PixelsController', 'my');
Router::add('logout', '/logout', '\App\Controllers\Auth\LogoutController', 'index');
Router::add('users', '/users', '\App\Controllers\UsersController', 'index');