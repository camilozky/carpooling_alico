<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageEdited extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "Acabas de modificar un viaje";
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
        return $this->view('emails.message-edited');
    }
}
