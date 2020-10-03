<?php

use Core\Router;

//public links
Router::add('index', '/index', '\App\Controllers\PixelsController');
Router::add('login', '/login', '\App\Controllers\Auth\LoginController');
Router::add('register', '/register', '\App\Controllers\Auth\RegisterController');
//user links
Router::add('add', '/add', '\App\Controllers\PixelsController', 'add');
Router::add('my', '/my', '\App\Controllers\Auth\PixelsController', 'my');
Router::add('logout', '/logout', '\App\Controllers\Auth\LogoutController');