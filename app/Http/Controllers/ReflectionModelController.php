<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Radar;
use App\RadarPosition;

class ReflectionModelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function position($id)
    {
      $position = RadarPosition::find($id);
      if(empty($position)) return redirect('/reflectionmodel/');
      return view('reflectionmodel.position', compact('position'));
    }
}
