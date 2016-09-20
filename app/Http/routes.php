<?php

Route::get('/login', 'AuthenticateController@getLogin')->middleware('guest');
Route::get('/logout', 'AuthenticateController@logout')->middleware('auth');
Route::get('/', 'DashboardController@index');


$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
  $api->get('fruits', 'App\Http\Controllers\FruitsController@index');
  $api->get('fruit/{id}', 'App\Http\Controllers\FruitsController@show');

  $api->post('authenticate', 'App\Http\Controllers\AuthenticateController@authenticate');

  // Api route with authentication
  $api->group(['middleware' => 'jwt.auth'], function($api){
    $api->get('authenticated_user', 'App\Http\Controllers\AuthenticateController@authenticatedUser');

    $api->post('fruits', 'App\Http\Controllers\FruitsController@store');
    $api->delete('fruits/{id}', 'App\Http\Controllers\FruitsController@destroy');

    $api->post('logout', 'App\Http\Controllers\AuthenticateController@logout');
    $api->get('token', 'App\Http\Controllers\AuthenticateController@getToken');

    $api->get('users', 'App\Http\Controllers\UserController@getUsers');
    $api->get('user/{user_name}', 'App\Http\Controllers\UserController@userExist');
    $api->post('user', 'App\Http\Controllers\UserController@store');

    $api->get('provinces', 'App\Http\Controllers\ProvinceController@getProvinces');
    $api->post('province/store', 'App\Http\Controllers\ProvinceController@store');
    $api->put('province/update', 'App\Http\Controllers\ProvinceController@update');
  });
});