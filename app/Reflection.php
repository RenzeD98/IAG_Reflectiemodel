<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reflection extends Model
{
    protected $fillable = ['title', 'message'];

    public function feedback()
    {
        return $this->hasMany('App\Feedback');
    }

}
