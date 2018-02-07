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

//read from session cookie (guest)
//read from database (user)

Route::get('/hoponin','LocalizationController@index');

Route::get('/hoponin/{locale}','LocalizationController@langSelected');

Route::get('/hoponin/{locale}/registeroffer','HomeController@registeranoffer');

Auth::routes();