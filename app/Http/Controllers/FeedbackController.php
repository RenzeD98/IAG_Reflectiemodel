<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\message;
class FeedbackController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('feedback');
    }

    public function create(Request $request)
    {
      $id = Auth::id();
      $message= message::create([
                'user_id' => $id,
                'message' => $request->input('message'),
                'title' => $request->input('title'),
       ]);
    }
}
