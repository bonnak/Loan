<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;

class DashboardController extends Controller
{
  public function index()
  {
  	return view('index');   	                     
  }
}
