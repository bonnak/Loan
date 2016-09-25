<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
  protected $table = 'communes';
  protected $fillable = ['district_id', 'name_en', 'name_kh'];
}
