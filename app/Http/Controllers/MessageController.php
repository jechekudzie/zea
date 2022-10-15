<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    //
    public function index()
    {
        $messages = Message::all()->sortByDesc('id');
        return view('admin.messages.index', compact('messages'));
    }

    public function create()
    {
        return view('admin.messages.create');
    }

    public function store()
    {
        $message = Message::create(request()->validate([
            'subject' => ['required'],
            'body' => ['required', 'min:10'],
        ]));

        $subscribers = Subscriber::all();
        foreach ($subscribers as $subscriber) {
            try {
                    $subscriber_id = $subscriber->id;
                Mail::to($subscriber->email)->send(new \App\Mail\Message($message,$subscriber_id));
            } catch (\Exception $exception) {
                Log::error($exception);
            }
        }

        return back()->with('message', 'message successfully added.');
    }

    public function edit(Message $message)
    {
        return view('admin.messages.edit', compact('message'));
    }

    public function show(Message $message)
    {
        return view('admin.messages.show', compact('message'));
    }

    public function update(Message $message)
    {
        $message->update(request()->validate([
            'subject' => ['required'],
            'body' => ['required', 'min:10'],
        ]));

        return back()->with('message', 'message updated successfully.');
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return redirect('/admin/messages')->with('message', 'message deleted successfully.');
    }

}
