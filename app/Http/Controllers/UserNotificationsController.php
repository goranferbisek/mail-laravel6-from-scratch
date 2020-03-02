<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    public function show()
    {
        // no authentication used as in laracast video
        // manualy made a user with tinker
        $user = User::first();

        return view('notifications.show', [
            'notifications' => tap($user->unreadNotifications)->markAsRead()
        ]);
    }
}
