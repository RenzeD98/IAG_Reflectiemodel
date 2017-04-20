<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReflectionController extends Controller
{
    public function index(){
      return view('pages\reflection');
    }

    public function create(){
      return view('pages\create');
    }
}
