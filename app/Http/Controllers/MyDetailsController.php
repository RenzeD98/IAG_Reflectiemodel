<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User; 
use DB;

class MyDetailsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      $user = Auth::user();
      return view('profile/mydetails', compact('user'));
  }

  public function update(Request $request)
  { 
    
    //dd($input = $request->all());
    $this->validate($request, [
      'function'    => 'max:255',
      'experience'  => 'max:255',
      'function'    => 'max:255',
      'phone'       => 'max:255',
    ]);

    $user = Auth::user();

    $user->experience = $request->experience;
    $user->function = $request->function;
    $user->phone = $request->phone;
    $user->save();

    $message = 'Profiel succesvol gewijzigd';
    Session::flash('message', $message);
    return back();
    
  }
}