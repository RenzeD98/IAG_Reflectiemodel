<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.profile');
    }
    public function gegevens()
    {
        $id = Auth::id();
        $users = DB::table('users')->where('id', $id)->get();
        return view('profile/mydetails', compact('users'));
    }
    public function instellingen()
    {
        return view('profile.instellingen');
    }
    public function agenda()
    {
        return view('profile.agenda');
    }
    public function contacten()
    {
        return view('profile.contacten');
    }
}
