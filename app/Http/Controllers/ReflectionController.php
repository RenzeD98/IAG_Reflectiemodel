<?php
  namespace App\Http\Controllers;
  use Auth;
  use App\Reflection;
  use Illuminate\Http\Request;
  
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
        'title' => 'max:255',
        'message' => 'required|min:1|max:5000',
        'tags' => 'max:255',
        'user_id' => 'required'
      ]);

      if(!isset($request->id)){
        $reflection = new Reflection;
        $reflection->title = $request->title;
        $reflection->message = $request->message;
        $reflection->tags = $request->tags;
        $reflection->user_id = Auth::id();
        $reflection->save();

      }else{
        $reflection = Reflection::find($request->id);
        $reflection->title = $request->title;
        $reflection->message = $request->message;
        $reflection->tags = $request->tags;
        $reflection->save();
      }
      
      return redirect('/reflecties');
    }
    //Specific reflection form
    public function getReflection($id){
      $reflection = Reflection::where('id', $id)->first();
      $reflection->tags = explode(',',$test = $reflection->tags);

      return view('reflection.view', compact('reflection'));
    }
    public function updateReflection($id){
      $reflection = Reflection::where('id', $id)->first();  
      return view('reflection.update', compact('reflection'));
    }
}