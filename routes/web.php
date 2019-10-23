<?php

Route::get('/', ['as' => 'landing', 'uses' => 'RouteController@showLanding']);

Route::group(['middleware' => 'is_auth'], function () {
    Route::get('/login', ['as' => 'login', 'uses' => 'RouteController@showLogin']);
    Route::post('/login', ['as' => 'login', 'uses' => 'Auth\AuthController@loginAsUser']);
});


