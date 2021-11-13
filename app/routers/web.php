<?php
use App\Router;
Router::get('/hello', function(){
    echo 'Hello world';
});
Router::error(function(){
    echo '404 :: Page Not Found';
});

Router::get('/','App\Controllers\HomeController@index');
Router::get('/home','App\Controllers\HomeController@index');

Router::get('/login', '\App\Controllers\Auth\LoginController@showLoginForm');
Router::post('/login', '\App\Controllers\Auth\LoginController@login');

Router::get('/register', '\App\Controllers\Auth\RegisterController@showRegisterForm');
Router::post('/register', '\App\Controllers\Auth\RegisterController@register');



?>