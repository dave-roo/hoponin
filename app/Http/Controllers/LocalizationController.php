<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LocalizationController extends Controller {
   public function index(){
	  
	$locale = 'en';
	app()->setLocale($locale);
	session(['language' => $locale]);
	  
	return view('index');
   }
   
   public function langSelected($locale){

	app()->setLocale($locale);
	session(['language' => $locale]);

	return view('index');
   }
}