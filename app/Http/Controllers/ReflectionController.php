<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Post;

class ReflectionController extends Controller
{ // view to reflection
    public function index(){
      $reflections = DB::table('cases')->get();

      return view('reflection\reflection', compact('reflections'));
    }

// view to reflection/create
    public function create(){
      return view('reflection.create');
    }
}
