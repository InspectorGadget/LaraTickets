<?php

Route::get('/', ['as' => 'landing', 'uses' => 'RouteController@showLanding']);

Route::get('/login', ['as' => 'login', 'uses' => 'RouteController@showUserLogin']);
Route::post('/login', ['as' => 'login', 'uses' => 'Auth\AuthController@authenticateUser']);

Route::get('/admin', ['as' => 'admin.login', 'uses' => 'RouteController@showAdminLogin']);
Route::post('/admin', ['as' => 'admin.login', 'uses' => 'Auth\AuthController@authenticateAdmin']);
