<?php
  namespace App\Http\Controllers;
  use Auth;
  use App\Reflection;
  use Illuminate\Http\Request;
  
  class ReflectionController extends Controller{ // view to reflection
    
    public function list(){
      $id = Auth::id();
      $reflections = Reflection::where('user_id', $id)->orderBy('created_at', 'desc')->take(10)->get();        
      return view('reflection.list', compact('reflections'));
    }
    // New reflection form
    public function newReflection(){
      return view('reflection.create');
    }
    //Store the new reflection 
    public function storeReflection(Request $request){
      if(!isset($request->id)){
        $reflection = new Reflection;
        $reflection->title = $request->title;
        $reflection->message = $request->message;
        $reflection->user_id = Auth::id();
        $reflection->save();
      }else{
        $reflection = Reflection::find($request->id);
        $reflection->title = $request->title;
        $reflection->message = $request->message;
        
        $reflection->save();
      }
      return redirect('/reflecties');
    }
    //Specific reflection form
    public function getReflection($id){
      $reflection = Reflection::where('id', $id)->first();  
      return view('reflection.view', compact('reflection'));
    }
    public function updateReflection($id){
      $reflection = Reflection::where('id', $id)->first();  
      return view('reflection.update', compact('reflection'));
    }
}