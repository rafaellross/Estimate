<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
  public function rates()
  {
    return $this->hasMany('App\Rate')->orderBy('code');
  }

  public function customer()
  {
     return $this->belongsTo('App\Customer');
  }

}
