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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');
Route::get('/event/{id}', 'EventController@show');

Route::post('/event', 'EventController@subscribeUser');
Route::delete('/event', 'EventController@delete');
