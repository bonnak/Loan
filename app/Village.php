<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
  protected $table = 'villages';
  protected $fillable = ['commune_id', 'name_en', 'name_kh'];
}
