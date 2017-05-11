<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReflectionModelController extends Controller
{
    public function getModel()
    {
      return view('reflectionmodel.index');
    }

    //individual radar return view
    public function radar(Radar $radar)
    {

      return view('reflectionmodel.template', compact('radar'));
    }

    // public function custom()
    // {
    //   return view('reflectionmodel.custom');
    // }
    // public function feedback()
    // {
    //   return view('reflectionmodel.feedback');
    // }
    // public function focus()
    // {
    //   return view('reflectionmodel.focus');
    // }
    // public function methodology()
    // {
    //   return view('reflectionmodel.methodology');
    // }
    // public function model()
    // {
    //   return view('reflectionmodel.model');
    // }
    // public function strategy()
    // {
    //   return view('reflectionmodel.strategy');
    // }
    // public function theory()
    // {
    //   return view('reflectionmodel.theory');
    // }
    // public function transparent()
    // {
    //   return view('reflectionmodel.transparent');
    // }
}
