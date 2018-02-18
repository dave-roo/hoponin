<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BrainController extends Controller {
	
	public function registeranoffer($locale)
	{
		app()->setLocale($locale);

		return view('registeroffer.registeranoffer');
	}
	
	public function registeranofferdetails(Request $request)
	{
		app()->getLocale();

		return view('registeroffer.registeranofferdetails');
	}

   
}