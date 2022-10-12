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
        Subscriber::create(request()->validate([
            'email' => ['required','email', 'unique:subscribers'],
        ],[
            'email.unique:subscribers' => 'this email already exists, you use a different email to subscribe.'
        ]));

        return back()->with('message', 'subscribed successfully.');
    }
}
