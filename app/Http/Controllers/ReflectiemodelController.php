<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReflectiemodelController extends Controller
{
    public function index()
    {
        return view('reflectiemodel.overzicht');
    }
}
