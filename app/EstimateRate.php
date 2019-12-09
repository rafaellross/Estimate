<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstimateRate extends Model
{
  public function estimate()
  {
     return $this->belongsTo('App\Estimate');
  }

  public function items()
  {
    return $this->hasMany('App\EstimateRateItem')->orderBy('code');
  }

}
