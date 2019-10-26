<?php

Route::get('/', ['as' => 'landing', 'uses' => 'RouteController@showLanding']);

// [User Login/Register]
Route::get('/login', ['as' => 'user.login', 'uses' => 'RouteController@showUserLogin']);
Route::post('/login', ['as' => 'user.login', 'uses' => 'Auth\AuthController@authenticateUser']);
Route::get('/register', ['as' => 'user.register', 'uses' => 'RouteController@showUserRegister']);
Route::post('/register', ['as' => 'user.register', 'uses' => 'Auth\AuthController@registerUser']);
// -----------

// [Admin Login]
Route::get('/admin', ['as' => 'admin.login', 'uses' => 'RouteController@showAdminLogin']);
Route::post('/admin', ['as' => 'admin.login', 'uses' => 'Auth\AuthController@authenticateAdmin']);
// -----------

// [Member]
Route::get('/my-tickets', ['as' => 'dashboard.user', 'uses' => 'RouteController@showMyTickets']);
// -----------

// [Admin]
Route::get('/dashboard', ['as' => 'dashboard.admin', 'uses' => 'RouteController@showAdminDashboard']);
// -----------
