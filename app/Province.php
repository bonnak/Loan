<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
  protected $table = 'provinces';
  protected $fillable = ['name_en', 'name_kh'];
}
