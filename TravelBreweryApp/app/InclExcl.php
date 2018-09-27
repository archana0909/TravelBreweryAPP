<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InclExcl extends Model
{
    public function tourDetail()
      {
          return $this->belongsToMany('App\TourDetail');
      }
}
