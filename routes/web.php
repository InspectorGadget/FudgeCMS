<?php

Route::get('login', ['as' => 'login', 'uses' => 'Route\RouteController@login']);
Route::post('login', ['as' => 'login', 'uses' => 'Auth\AuthController@login']);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', ['as' => 'home', 'uses' => 'Route\RouteController@index']);
    Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);

    Route::group(['middleware' => 'role.superuser'], function() {
        Route::resource('users', 'User\UserController');
        Route::resource('roles', 'Role\RoleController');
    });
});
