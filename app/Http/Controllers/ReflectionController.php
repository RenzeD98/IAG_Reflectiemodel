<?php
  namespace App\Http\Controllers;

  use Auth;
  use App\Reflection;
  use Illuminate\Http\Request;

  class ReflectionController extends Controller{ // view to reflection
    public function index(){
      $id = Auth::id();
      $reflections = Reflection::where('user_id', $id)->orderBy('title', 'desc')->take(10)->get();

          
      return view('reflection.list', compact('reflections'));
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
    }



    public function reflection($id){
      $reflection = Reflection::where('id', $id)->first();  

      return view('reflection.view', compact('reflection'));

    }

    public function update($id){

      $reflection = Reflection::where('id', $id)->first();  

      return view('reflection.update', compact('reflection'));


    }
}
