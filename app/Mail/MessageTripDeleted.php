<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageTripDeleted extends Mailable
{
    use Queueable, SerializesModels;
    public $trip;
    public $subject = "Acabas de eliminar un viaje";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($trip)
    {
        $this->trip = $trip;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.message-trip-deleted');
    }
}
