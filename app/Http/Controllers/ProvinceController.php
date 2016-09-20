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
  public function getProvinces()
  {
  	return Province::get();
  }

  public function update()
  {
  	$province = Province::find(request()->get('id'));
  	$province->code = request()->get('code');
  	$province->name_en = request()->get('name_en');
  	$province->name_kh = request()->get('name_kh');

  	if( $province->save() )
  	{
  		return response()->json($province->toArray(), 200);
  	}

  	return response()->json([ 'message' => 'Cannot update province' ], 400);
  }

  public function store()
  {
  	$province = Province::create(request()->all());

  	return response()->json($province->toArray(), 200);
  }
}
