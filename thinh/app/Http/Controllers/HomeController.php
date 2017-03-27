<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $Request){
    	// return $Request->all(); lay taat ca du lieu trong request
    	return $Request->only("name","age");
    	return view('home',["name" => "Thinh"]);
    }
    public function getParam($name){
    	return "Page getParam => " ;
    }
   
}
