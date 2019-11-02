<?php

Route::get('/', ['as' => 'landing', 'uses' => 'RouteController@showLanding']);

// [User Login/Register]
Route::get('/login', ['as' => 'login', 'uses' => 'RouteController@showUserLogin']);
Route::post('/login', ['as' => 'login', 'uses' => 'Auth\AuthController@login']);
Route::get('/register', ['as' => 'user.register', 'uses' => 'RouteController@showUserRegister']);
Route::post('/register', ['as' => 'user.register', 'uses' => 'Auth\AuthController@registerUser']);
// -----------

Route::group(['middleware' => 'auth'], function() {

    Route::group(['middleware' => 'isUser'], function() {
        Route::get('/my-tickets', ['as' => 'dashboard.user', 'uses' => 'RouteController@showMyTickets']);
        Route::get('/my-tickets/{id}/view', ['as' => 'dashboard.user.ticket', 'uses' => 'RouteController@viewTicket']);

        Route::get('/new', ['as' => 'dashboard.user.new', 'uses' => 'RouteController@showNewTicketForm']);
        Route::post('/new', ['as' => 'dashboard.user.new', 'uses' => 'Ticket\TicketController@create']);
    });

    Route::group(['middleware' => 'isAdmin'], function() {
        Route::get('/dashboard', ['as' => 'dashboard.admin', 'uses' => 'RouteController@showAdminDashboard']);
    });

});


