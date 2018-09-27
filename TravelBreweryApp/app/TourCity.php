<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourCity extends Model
{

  public function tourDetail()
  {
      return $this->belongsTo('App\TourDetail');
  }
}
