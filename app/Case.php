<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Case extends Model
{
    protected $fillable = [
        'title', 'message',
    ];
}
