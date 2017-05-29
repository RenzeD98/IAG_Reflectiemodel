<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reflection;
use App\Feedback;
use Auth;
use App\User;
use Session;
use App\Notifications\MessageReceived;
use Notifiable;
/*
use Illuminate\Notifications\Notifiable;

use Notifiable;
*/
class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $id = Auth::id();
      $user = Auth::user();
      $reflections = Reflection::where('user_id', '!=' ,$id)
        ->orWhereNull('user_id')
        ->orderBy('created_at', 'desc')
        ->get();
      return view('feedback.index', compact('reflections','user'));
    }

    public function getReflectionWithFeedback($id)
    {
      $reflection = Reflection::with('feedback')->find($id);
      if(empty($reflection)) return redirect('/feedback/');
        $reflection->tags = explode(',',$test = $reflection->tags);

      return view('feedback.view', compact('reflection'));
    }

    public function storeFeedback(Request $request)
    {
      $this->validate($request, [
        'title' => 'max:255',
        'message' => 'required|min:1|max:5000'
      ]);

      $feedback = new Feedback;
      $feedback->title = $request->title;
      $feedback->messages = $request->message;
      $feedback->read = 0;
      $feedback->reflection_id = $request->id;
      $feedback->user_id = Auth::id();
      $feedback->save();

      $receiver = User::find($request->user_id);

      $receiver->notify(new MessageReceived($feedback));

      Session::flash('message', 'Succesvol feedback gegeven!');

      return redirect('/feedback/'. $request->id . '/view/');
    }
}