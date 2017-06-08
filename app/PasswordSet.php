<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordSet extends Model
{
    protected $table = ['email', 'token', 'created_at'];
}
