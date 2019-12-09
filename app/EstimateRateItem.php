<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstimateRateItem extends Model
{
  public function estimateRate()
  {
     return $this->belongsTo('App\EstimateRate');
  }

}
