<?php

Route::get('/login', 'AuthenticateController@getLogin')->middleware('guest');
Route::get('/logout', 'AuthenticateController@logout')->middleware('auth');
Route::get('/', 'DashboardController@index')->middleware('auth');


$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
  $api->get('fruits', 'App\Http\Controllers\FruitsController@index');
  $api->get('fruit/{id}', 'App\Http\Controllers\FruitsController@show');

  $api->post('authenticate', 'App\Http\Controllers\AuthenticateController@authenticate');

  // Api route with authentication
  $api->group(['middleware' => 'api.auth'], function($api){
    $api->get('authenticated_user', 'App\Http\Controllers\AuthenticateController@authenticatedUser');

    $api->post('fruits', 'App\Http\Controllers\FruitsController@store');
    $api->delete('fruits/{id}', 'App\Http\Controllers\FruitsController@destroy');

    $api->post('logout', 'App\Http\Controllers\AuthenticateController@logout');
    $api->get('token', 'App\Http\Controllers\AuthenticateController@getToken');

    $api->get('user', 'App\Http\Controllers\UserController@getUsers');
    $api->get('user/{user_name}', 'App\Http\Controllers\UserController@getUserName');
    $api->post('user', 'App\Http\Controllers\UserController@store');
  });
});