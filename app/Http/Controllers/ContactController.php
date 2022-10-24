<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contactForm');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store()
    {
        $contact = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'subject' => ['required'],
            'message' => ['required']
        ]);

        try {

            Mail::to('nigel@leadingdigital.africa')->send(new ContactMail($contact));
            return back()->with('message', 'Thank you for contact us. we will contact you shortly.');

        } catch (\Exception $exception) {
            Log::error($exception);
            return back()->with('message', 'email failed to send, log has been recorded.');

        }


    }
}
