<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reflection;
use Auth;

class FeedbackController extends Controller
{
    public function index(){
      $id = Auth::id();
      //$reflections = Reflection::all();

      //$reflections = Reflection::where('user_id', $id)->orderBy('created_at', 'desc')->get();  
      
      $reflections Reflection::where('user_id', '!=' , $id)->orWhereNull('user_id')->get()
    

      return view('feedback.index', compact('reflections'));
    }

    //Specific reflection form
    public function getFeedback($id){
      $reflection = Reflection::where('id', $id)->first();  
      return view('feedback.view', compact('reflection'));
    }
}
