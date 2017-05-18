<?php
  namespace App\Http\Controllers;
  use Auth;
  use App\Reflection;
  use Illuminate\Http\Request;
  use Session;
  
  class ReflectionController extends Controller{ // view to reflection
    
    public function list(){
      $id = Auth::id();
      $reflections = Reflection::where('user_id', $id)
        ->orderBy('created_at', 'desc')
        ->get(); 

      foreach($reflections as $reflection){
        $reflection->tags = explode(',',$test = $reflection->tags); 
      }
      
      return view('reflection.list', compact('reflections'));
    }

    // New reflection form
    public function newReflection(){
      return view('reflection.create');
    }

    //Store the new reflection 
    public function storeReflection(Request $request){

      $this->validate($request, [
        'title' => 'required:max:255',
        'message' => 'required|min:1|max:5000',
        'tags' => 'max:255',
        //'user_id' => 'required'
      ]);

      if(!isset($request->id)){
        $reflection = new Reflection;
        $reflection->title = $request->title;
        $reflection->message = $request->message;
        $reflection->tags = $request->tags;
        $reflection->user_id = Auth::id();
        $reflection->save();
        $message = 'Reflectie succesvol toegevoegd';
      }else{
        $reflection = Reflection::find($request->id);
        $reflection->title = $request->title;
        $reflection->message = $request->message;
        $reflection->tags = $request->tags;
        $reflection->save();
        $message = 'Reflectie succesvol gewijzigd';
      }
      Session::flash('message', $message);
      return back();
    }

    //Specific reflection form
    public function getReflection($id){
      $reflection = Reflection::where('id', $id)->first();
      $reflection->tags = explode(',',$test = $reflection->tags);

      return view('reflection.view', compact('reflection'));
    }
    //Update reflection View
    public function updateReflection($id){
      $reflection = Reflection::where('id', $id)->first();  
      return view('reflection.update', compact('reflection'));
    }
    public function deleteReflection($id){
      echo 'Working on this ';
    }
}