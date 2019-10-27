<?php

Route::get('/', ['as' => 'landing', 'uses' => 'RouteController@showLanding']);

// [User Login/Register]
Route::get('/login', ['as' => 'user.login', 'uses' => 'RouteController@showUserLogin']);
Route::post('/login', ['as' => 'user.login', 'uses' => 'Auth\AuthController@login']);
Route::get('/register', ['as' => 'user.register', 'uses' => 'RouteController@showUserRegister']);
Route::post('/register', ['as' => 'user.register', 'uses' => 'Auth\AuthController@registerUser']);
// -----------

Route::group(['middleware' => 'isGuest'], function() {
    // [Member]
    Route::get('/my-tickets', ['as' => 'dashboard.user', 'uses' => 'RouteController@showMyTickets']);
    // -----------
});

Route::group(['middleware' => 'isAdmin'], function() {
    // [Admin]
    Route::get('/dashboard', ['as' => 'dashboard.admin', 'uses' => 'RouteController@showAdminDashboard']);
    // -----------
});

