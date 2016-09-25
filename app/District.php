<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
  protected $table = 'districts';
  protected $fillable = ['province_id', 'name_en', 'name_kh'];
}
