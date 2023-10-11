<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Message extends Mailable /*implements ShouldQueue*/
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $message, $subscriber_id, $path;

    public function __construct($message, $subscriber_id, $path)
    {
        //
        $this->message = $message;
        $this->subscriber_id = $subscriber_id;
        $this->path = $path;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->path != null) {
            return $this->attach($this->path)
                ->markdown('mail.message')->from('admin@zimevalassoc.org', 'ZEA Administration');
        } else {
            return $this->markdown('mail.message')->from('admin@zimevalassoc.org', 'ZEA Administration');
        }
    }
}
