<?php
// Authentication routes...
//Route::get('auth/login', 'Ax2to\LaravelUser\Http\Controllers\Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::controllers([
    'auth' => 'Ax2to\LaravelUser\Http\Controllers\Auth\AuthController',
    'password' => 'Ax2to\LaravelUser\Http\Controllers\Auth\PasswordController',
    'user' => 'Ax2to\LaravelUser\Http\Controllers\User\UserController'
]);