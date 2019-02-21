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

Route::get('/', 'PageController@index');
Route::get('/login_register', 'UserController@index');
Route::get('/user_welcome', 'CapturedPageController@index');

Route::get('/pokemon/{pokemon}', 'PokemonController@show'); 
Route::get('/pokemon', 'PokemonController@index');

Route::post('/captured/{pokemon}', 'CaptureController@update');
Route::get('/captured', 'CaptureController@index');

Route::post('/login', 'LoginController@store');
Route::post('/register', 'RegisterController@store');

Route::get('/populate', 'PopulateController@populate');