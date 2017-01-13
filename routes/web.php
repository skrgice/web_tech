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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('register/verify/{token}', 'Auth\RegisterController@verify');


Route::get('/showNewAd', function()
{
    return view('ads/create');
});

Route::post('/insert_ad', 'AdsController@insert_ad');




