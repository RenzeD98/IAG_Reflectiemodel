<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.profile');
    }
    public function gegevens()
    {
        return view('profile.gegevens');
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
