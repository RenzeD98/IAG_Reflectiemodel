<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reflection extends Model
{
    protected $table = 'cases';

    protected $fillable = ['title', 'message'];
}
