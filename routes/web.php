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

Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],
function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/', function()
	{
		return View::make('hello');
	});

	Route::get('test',function(){
		return View::make('test');
	});
});

Auth::routes();