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

Route::get('/','LocalizationController@index');

Route::get('/hoponin/','LocalizationController@index');

Route::get('/hoponin/registeroffer','BrainController@registeranoffer')->name('registeranoffer');

Route::get('/hoponin/registeranofferdetails','BrainController@registeranofferdetails')->name('registeranofferdetails');

Route::post('/hoponin/registeranofferdetails','BrainController@registeranofferdetails')->name('registeranofferdetailspost');

Route::post('/hoponin/en','BrainController@setthelingo')->name('settoEnglish');

Route::post('/hoponin/fr','BrainController@setthelingo')->name('settoFrench');

Route::post('/hoponin/de','BrainController@setthelingo')->name('settoGerman');

Auth::routes();