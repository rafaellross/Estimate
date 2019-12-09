<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
  public function items()
  {
    return $this->hasMany('App\RateItem')->orderBy('code');
  }

}
