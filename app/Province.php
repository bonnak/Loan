<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
  protected $table = 'provinces';
  protected $fillable = ['code', 'name_en', 'name_kh'];

  protected function k()
  {

  }
  /**
   * Code to uppercase.
   * 
   * @param string $value;
   */
  protected function setCodeAttribute($value)
  {
      $this->attributes['code'] = strtoupper($value);
  }
}
