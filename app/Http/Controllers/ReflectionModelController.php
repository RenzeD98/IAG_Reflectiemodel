<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Radar;

class ReflectionModelController extends Controller
{
    public function getModel()
    {
      return view('reflectionmodel.index');
    }

    //individual radar return view

    public function radar($id)
    {
      $radar = Radar::with('radars_options')->find($id);
      if(empty($radar)) return redirect('/reflectionmodel/');
      return view('reflectionmodel.radar', compact('radar'));
    }

}
