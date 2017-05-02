<?php

  namespace App\Http\Controllers;
  use App\Case;
  use Illuminate\Http\Request;
 //use DB;
  //use App\Post;


  class ReflectionController extends Controller{ // view to reflection
    public function index(){
      $reflections = DB::table('cases')->get();
      return view('reflection\reflection', compact('reflections'));
    }

    // view to reflection/create
    public function view(){
      return view('reflection.create');
    }

    public function create(Request $request){


      $reflection = new Case;

      $reflection->title = $request->title;
      $reflection->message = $request->message;
      $reflection->user_id = Auth::id();
      $reflection->save();

     

      //$request->session()->flash('alert-success', 'Successfully updated access tokens!');
      return redirect('/home');


      //$reflections = DB::table('cases')->get();
      //return view('reflection\reflection', compact('reflections'));
    }
}
