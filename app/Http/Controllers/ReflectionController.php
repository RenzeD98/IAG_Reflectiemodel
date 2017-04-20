<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReflectionController extends Controller
{
    public function index(){
      $reflections = DB::table('cases')->get();

      return view('reflection\reflection', compact('reflections'));
    }

    public function create(){
      return view('reflection\create');
    }
}
