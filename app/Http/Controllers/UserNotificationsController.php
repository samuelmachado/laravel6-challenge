<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    public function show()
        {

            // $notifications = User::first()->notifications;
            // $notifications = User::first()->unreadNotifications;
            // foreach($notifications as $notification) {
            //     $notification->markAsRead();
            // }
            // $notifications->markAsRead();
            $notifications = tap(User::first()->unreadNotification->markAsRead());
            return view('notifications.show', [
                'notifications' => $notifications,
            ]);
        }
   
}
