<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
	protected $fillable = ['title', 'message', 'tags'];

	public function reflection()
    {
        return $this->belongsTo('App\Reflection');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
