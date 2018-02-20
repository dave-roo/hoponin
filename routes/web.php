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

//read from session cookie (guest)
//read from database (user)

Route::get('/hoponin','LocalizationController@index');

Route::get('/setlanguage/{locale}','BrainController@setthelingo');

Route::get('/hoponin/{locale}','BrainController@setthelingo');

Route::get('/hoponin/registeroffer','BrainController@registeranoffer');

Route::get('/hoponin/registeranofferdetails','BrainController@registeranofferdetails')->name('registeranofferdetails');

Route::post('/hoponin/registeranofferdetails','BrainController@registeranofferdetails')->name('registeranofferdetailspost');

Auth::routes();