<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Notification;

class NotificationController extends Controller
{
		public function __construct()
    {
        
    }

    public function index()
    {
      $id = Auth::id();
      /*$notifications = Notification::where('user_id', $id)
    	->orderBy('created_at', 'desc')->get(); 
			*/

      //return view('notifications.index', compact('notifications'));

      return view('notification.index');
    }

    public function view($id)
    {
      $id = Auth::id();
      /*$notifications = Notification::where('user_id', $id)
    	->orderBy('created_at', 'desc')->get(); 
			*/

      //return view('notifications.index', compact('notifications'));

      return view('notification.view');
    }
}
