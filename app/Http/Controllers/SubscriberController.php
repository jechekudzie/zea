<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{

    public function index()
    {
        $subscribers = Subscriber::all();
        return view('admin.subscribers.index', compact('subscribers'));
    }

    public function create()
    {
        return view('admin.subscribers.create');
    }

    public function store()
    {
        $check_email = Subscriber::where('email', request('email'))->first();

        if ($check_email != null) {
            if ($check_email->Is_subscribe == 0) {
                $check_email->update([
                    'Is_subscribe' => 1
                ]);
            } else {
                return back()->with('message', 'You email already exist in subscribers director.');
            }
        } else {
            Subscriber::create(request()->validate([
                'email' => ['required', 'email'],
            ]));
        }

        return back()->with('message', 'subscribed successfully.');
    }


    public
    function unsubscribe_confirmation(Subscriber $subscriber)
    {
        return view('website.unsubscribe_confirmation', compact('subscriber'));
    }

    public
    function unsubscribe(Subscriber $subscriber)
    {
        $subscriber->update([
            'Is_subscribe' => 0
        ]);
        return back()->with('message', 'subscribed successfully.')->with('message', 'You have successfully unsubscribed from our communication channel.');
    }


}
