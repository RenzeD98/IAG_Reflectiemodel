<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RadarOption extends Model
{
  protected $table = 'radars_options';

  public function radar()
  {
    return $this->belongsTo('App\Radar');
  }
}
