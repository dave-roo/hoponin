<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BrainController extends Controller {
	
	public function registeranoffer($locale)
	{
		app()->setLocale($locale);
			  
		return view('registeranoffer');
	}
	
	public function registeranofferdetails($locale)
	{
		app()->setLocale($locale);
			  
		return view('registeranofferdetails');
	}

   
}