<?php
  namespace App\Http\Controllers;

  use Auth;
  use App\Reflection;
  use Illuminate\Http\Request;



  class ReflectionController extends Controller{ // view to reflection
    public function index(){
      $reflections = Reflection::get();
      //$reflections->updated_at = date("d-m-Y");

    

      return view('reflection.reflection', compact('reflections'));
    }

    // view to reflection/create
    public function view(){
      return view('reflection.create');
    }

    public function create(Request $request){


      $reflection = new Reflection;

      $reflection->title = $request->title;
      $reflection->message = $request->message;
      $reflection->user_id = Auth::id();
      $reflection->save();

      return redirect('/reflectie');

      //$request->session()->flash('alert-success', 'Successfully updated');

    }

    public function getReflection(){


      $reflection = new Reflection;

      $reflection->title = $request->title;
      $reflection->message = $request->message;
      $reflection->user_id = Auth::id();
      $reflection->save();

      return redirect('/reflectie');

      //$request->session()->flash('alert-success', 'Successfully updated');

    }
}
