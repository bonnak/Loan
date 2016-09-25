<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
  protected $table = 'Villages';
  protected $fillable = ['commune_id', 'name_en', 'name_kh'];
}
