<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\District;

class DistrictController extends Controller
{
	/**
	 * Fetch all districts
	 * 
	 * @return array 
	 */
  public function getDistricts()
  {
  	return District::with('province')->get();
  }
}
