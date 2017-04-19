<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class OverzichtController extends Controller
{
    public function index()
    {
      $id = Auth::id();
      $messages= DB::table('messages')->where('user_id', $id)->get();

      return view('overzicht', compact('messages'));
    }
}
