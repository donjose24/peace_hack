<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');
Route::get('/event/{id}', 'EventController@show');
Route::get('/login', 'Auth\LoginController@login');
Route::get('/rewards', 'RewardController@index');

Route::post('/event', 'EventController@subscribeUser');
Route::delete('/event', 'EventController@delete');
