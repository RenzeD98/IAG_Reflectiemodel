<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Reflection;
use App\Feedback;

class ArchiveController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index(Request $request)
	{
		if($request->input('search')) return $this->search($request);

		$reflections = Reflection::orderBy('created_at','desc')->get();
		
		return view('archive.index', compact('reflections'));
	}

	public function search(Request $request)
	{
		$reflections = Reflection::where('tags','LIKE', '%' . $request->input('search') . '%')
		->orWhere('title', 'like', '%' . $request->input('search') . '%')
		->get();
		return response()->json(['reflections'=>$reflections]);
	}

	public function getReflections(Request $request)
  {
		$reflections = Reflection::orderBy('created_at','desc')->get();
		return response()->json(['reflections'=>$reflections]);
	}
}
