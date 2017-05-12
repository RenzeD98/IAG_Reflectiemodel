<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reflection;
use App\Feedback;
use Auth;
use DB;
use Session;

class FeedbackController extends Controller
{
    public function index(){
      $id = Auth::id();
      $reflections = Reflection::all();
      //$reflections = Reflection::where('user_id', $id)->orderBy('created_at', 'desc')->get();  
      
      //$reflections Reflection::where('user_id', '!=' , $id)->orWhereNull('user_id')->get()
    
      //return view('feedback.index');
      return view('feedback.index', compact('reflections'));
    }

    //Specific reflection form
    public function getReflectionWithFeedback($id){
      $reflection = Reflection::with('feedback')->find($id);   
      if(empty($reflection)) return redirect('/feedback/');
       $reflection->tags = explode(',',$test = $reflection->tags);

      return view('feedback.view', compact('reflection'));
    }

    
    public function storeFeedback(Request $request){

      $this->validate($request, [
        'title' => 'max:255',
        'message' => 'required|min:1|max:5000'
      ]);

      $feedback = new Feedback;
      $feedback->title = $request->title;
      $feedback->messages = $request->message;
      $feedback->read = 0;
      $feedback->reflection_id = $request->id;
      $feedback->user_id = $user_id = Auth::id();
      $feedback->save();

      Session::flash('message', 'Succesvol feedback gegeven!');

      return redirect('/feedback/'. $request->id . '/view/');
      
    }
}
