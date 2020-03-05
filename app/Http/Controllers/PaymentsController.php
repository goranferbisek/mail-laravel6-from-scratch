<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
use App\User;
use Illuminate\Http\Request;
use App\Notifications\PaymentRecieved;
use Illuminate\Support\Facades\Notification;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');
    }

    public function store()
    {
        //no actual payment, just a notification

        // no authentication used as in laracast video
        // manualy made a user with tinker
        // $user = User::first();

        // Notification::send($user, new PaymentRecieved(500));

        // return redirect('/payments/create');

        ProductPurchased::dispatch('toy');
    }
}
