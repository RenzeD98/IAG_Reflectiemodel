<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReflectionModelController extends Controller
{
    public function getModel()
    {
      return view('reflectionmodel.index');
    }
}
