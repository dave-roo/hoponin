<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LocalizationController extends Controller {
   public function index(Request $request){
	
	$locale = $request->session()->get('language');
	
	app()->setLocale($locale);
	session(['language' => $locale]);
	  
	return view('index');
   }
}