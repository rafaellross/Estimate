<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

  public function estimates()
  {
    return $this->hasMany('App\Estimate')->orderBy('due_dt');
  }

}
