<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LocalizationController extends Controller {
   public function index(){
	  
      app()->setLocale('en');
	  
	  return view('demo');
   }
   
   public function langSelected($locale){
	  
      app()->setLocale($locale);

	  return view('demo');
   }
}