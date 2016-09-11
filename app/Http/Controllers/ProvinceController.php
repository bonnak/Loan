<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Province;

class ProvinceController extends Controller
{
	/**
	 * Fetch all province
	 * 
	 * @return array 
	 */
  public function index()
  {
  	return Province::get();
  }
}
