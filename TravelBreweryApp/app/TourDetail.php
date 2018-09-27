<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourDetail extends Model
{
  public function tourCities()
  {
    return $this->hasMany('App\TourCity','trip_id','id');
  }

  public function inclExcl()
    {
        return $this->belongsToMany('App\InclExcl','tour_incl_excl','tour_id','inc_excl_id');
    }
    public function user()
      {
          return $this->belongsToMany('App\User','tour_like_user','tour_id','user_id');
      }
}
