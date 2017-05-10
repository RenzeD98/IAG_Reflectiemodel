<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
	protected $fillable = ['title', 'message'];

	public function reflection()
    {
        return $this->hasOne('App\Reflection');
    }
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
