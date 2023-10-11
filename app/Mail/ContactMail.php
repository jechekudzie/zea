<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new contact instance.
     *
     * @return void
     */
    use Queueable, SerializesModels;

    public $contact;

    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the contact.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from($this->contact['email'])
            ->subject( $this->contact['subject'])
            ->markdown('mail.contact');
    }
}
