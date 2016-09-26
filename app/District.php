<?php

namespace App;

use App\Province;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
  protected $table = 'districts';
  protected $fillable = ['province_id', 'name_en', 'name_kh'];

  public function province()
  {
  	return $this->belongsTo(Province::class);
  }
}
