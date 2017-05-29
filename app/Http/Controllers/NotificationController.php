<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Notification;
use Carbon\Carbon;
use User;

class NotificationController extends Controller
{
		public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $user = Auth::User();
      $notifications = $user->notifications;
      $read = array();
      $unread = array();

      foreach($notifications as $n){
        $sender = Auth::User($n->notifiable_id);
        if(!$n->read_at){
          $unread[] = $n;
        }else{
          $read[] = $n;
        }
      }
      return view('notification.index', compact('notifications','read','unread','sender'));
    }

    public static function countUnread()
    {
      if (Auth::check())
      {
        $user = Auth::User();
        $notifications = $user->notifications;

        $unread = array();

        foreach($notifications as $n){
          if(!$n->read_at) $unread[] = $n;
        }
        $amount = count($unread);
        if($amount > 0) return $amount;    
      }
      return 0;
    }

    public function markAsRead($id) {
      $notification = Auth::user()->notifications()->findOrFail($id);
      $notification = Notification::find($id);
      $notification->read_at = Carbon::now();
      $notification->save();

      return view('notification.index');
    }

    // public function view()
    // {
    //   $id = Auth::id();
    //   $notifications = Notification::where('user_id', $id)
    //  ->orderBy('created_at', 'desc')->get();
      

    //   //return view('notifications.index', compact('notifications'));

    //   return view('notification.index');
    // }

}
