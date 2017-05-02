<?php
  namespace App\Http\Controllers;

  use Auth;
  use App\Reflection;
  use Illuminate\Http\Request;



  class ReflectionController extends Controller{ // view to reflection
    public function index(){
      $id = Auth::id();
      $reflections = Reflection::where('user_id', $id)->orderBy('title', 'desc')->take(10)->get();
      //$reflections->updated_at = date("d-m-Y");
      return view('reflection.reflections', compact('reflections'));
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

      return redirect('/reflecties');

      //$request->session()->flash('alert-success', 'Successfully updated');

    }

    public function reflection(){

      $reflection = Reflection::find('id', $id)->first();


    

      return view('reflection.reflection', compact('reflection'));

      //$request->session()->flash('alert-success', 'Successfully updated');

    }
}
