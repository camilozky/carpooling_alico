<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageSomeoneJoined extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "Alguien acaba de unirse a tu viaje";
    public $validatedRequestFields;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($validatedRequestFields)
    {
        $this->validatedRequestFields = $validatedRequestFields;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.message-someone-joined');
    }
}
