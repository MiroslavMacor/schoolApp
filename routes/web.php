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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trips', 'TripsController@show');
Route::get('/users', 'UsersController@show');
Route::post('/add_user', 'UsersController@add');
Route::post('/store',    'UsersController@store');
//Route::get('/store',    'UsersController@store');
