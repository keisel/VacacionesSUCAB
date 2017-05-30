<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');
Route::resource('hotel','HotelController');

Route::get('/', function () {
    return view('welcome');
});
