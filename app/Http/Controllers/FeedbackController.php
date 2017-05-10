<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reflection;
use App\Feedback;
use Auth;
use DB;

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
      //dd(Reflection::findOrFail($id));

      $reflection = Reflection::where('id', $id)->first(); 

      $feedback = Reflection::find($id)->feedback;


      //dd($feedback);
      //$user = DB::table('users')->where('id', $user_id)->get();

      return view('feedback.view', compact('reflection','feedback'));
    }

    
    public function storeFeedback(Request $request){
      $feedback = new Feedback;
      $feedback->title = $request->title;
      $feedback->messages = $request->message;
      $feedback->read = 0;
      $feedback->reflection_id = $request->id;
      $feedback->user_id = $user_id = Auth::id();
      $feedback->save();

      return redirect('/feedback/'. $request->id . '/view/');
      
    }
}
