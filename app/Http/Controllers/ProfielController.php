<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfielController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile');
    }

    public function add(){
    	return view('profile-add');
    }
}