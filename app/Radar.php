<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Radar extends Model
{
  public function radars_options()
  {
    return $this->hasMany('App\RadarOption');
  }
}
