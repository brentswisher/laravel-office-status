<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'DashboardController@index');


Route::get('/users', 'UsersController@index');
Route::get('/users/edit', 'UsersController@edit');


Route::get('/users', 'UsersController@index');
Route::get('/users/create', 'UsersController@create');
Route::get('/users/{username}', 'UsersController@show');
Route::get('/users/{username}/edit', 'UsersController@edit');
Route::post('/users', 'UsersController@store');
Route::patch('/users/{username}', 'UsersController@update');
Route::delete('/users/{username}', 'UsersController@destroy');


Route::get('/status', 'StatusController@index');
Route::get('/status/create', 'StatusController@create');
Route::get('/status/{statusId}', 'StatusController@show');
Route::get('/status/{statusId}/edit', 'StatusController@edit');
Route::post('/status', 'StatusController@store');
Route::patch('/status/{statusId}', 'StatusController@update');
Route::delete('/status/{statusId}', 'StatusController@destroy');