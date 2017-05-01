<?php

namespace App\Http\Controllers;
use App\Case;
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
    public function view(){
      return view('reflection.create');
    }

    public function create(Request $request){
      //$case = new Case;
      $obama = Case::first();
      dd($obama);
      $case->title = $request->title;
      $case->message = $request->message;
      $case->save();

      $reflections = DB::table('cases')->get();

      return view('reflection\reflection', compact('reflections'));
    }
}
