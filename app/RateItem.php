<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RateItem extends Model
{
  public function rate()
  {
     return $this->belongsTo('App\Rate');
  }

  public function product()
  {
     return $this->belongsTo('App\Product');
  }

  public function updateProduct()
  {

    $this->product_id   = $this->product->id;
    $this->code         = $this->product->code;
    $this->description  = $this->product->description;
    $this->unit         = $this->product->unit;
    $this->cost_exgst   = $this->product->cost_exgst;
    $this->cost_incgst  = $this->product->cost_incgst;
    $this->cost_type    = $this->product->cost_type;
    $this->save();

  }


}
