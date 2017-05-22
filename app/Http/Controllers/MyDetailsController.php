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
      $id = Auth::id();
      $user = DB::table('users')->where('id', $id)->first();
      return view('profile/mydetails', compact('user'));

      //Omzetten met models, user informatie ophalen. 
  }

  public function update(Request $request)
  { 
    /*$this->validate($request, [
      'firstname'   => 'required|min:1|max:255',
      'lastname'    => 'required|min:1|max:255',
      'function'    => 'required|min:1|max:255',
      'experience'  => 'max:255',
      'email'       => 'max:255',
      'function'    => 'max:255',
    ]);*/
		
    var_dump($request->firstname);

    $id = Auth::id();
    $user = User::find($id);

    $user->firstname = $request->firstname;
    $user->lastname = $request->lastname;
    /*$user->experience = $request->experience;
    $user->email = $request->email;
    $user->function = $request->function;*/
    $user->save();

    $message = 'Profiel succesvol gewijzigd';
    Session::flash('message', $message);
    //return back();
    
  }
}
