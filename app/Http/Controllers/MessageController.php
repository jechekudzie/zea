<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\MemberContact;
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
        $message = request()->validate([
            'group' => ['required'],
            'subject' => ['required'],
            'body' => ['required', 'min:10'],
        ]);

        $path = ''; // Initialize path

        if (request()->hasfile('file')) {
            $file = request()->file('file');
            $name = $file->getClientOriginalName();
            $file_name = time() . $name;
            $path = $file->move('email_attachments', $file_name); // Store the file path
        }

        if ($message['group'] == 'subscribers') {
            $subscribers = Subscriber::all();
        }

        if ($message['group'] == 'members') {
            $subscribers = MemberContact::all();
        }

        foreach ($subscribers as $subscriber) {
            try {
                $subscriber_id = $subscriber->id;
                if ($message['group'] == 'members') {
                    Mail::to($subscriber->contact_email)->queue(new \App\Mail\Message($message, $subscriber_id, $path));
                }
                Mail::to($subscriber->email)->queue(new \App\Mail\Message($message, $subscriber_id, $path));
            } catch (\Exception $exception) {
                Log::error($exception);
            }
        }

        return back()->with('message', 'Message successfully added.');
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
