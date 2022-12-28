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

        $path = '';

        if ($message['group'] == 'subscribers') {
            $subscribers = Subscriber::all();
        }

        if ($message['group'] == 'members') {
            $subscribers = MemberContact::all();
        }

        if (request()->hasfile('file')) {

            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            //$path = $file->move('email_attachments', $file_name);
            $path = $file;

        }

        foreach ($subscribers as $subscriber) {
            try {
                $subscriber_id = $subscriber->id;
                if ($message['group'] == 'members') {

                    Mail::to($subscriber->contact_email)->send(new \App\Mail\Message($message, $subscriber_id,$path));
                }
                Mail::to($subscriber->email)->send(new \App\Mail\Message($message, $subscriber_id,$path));

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
