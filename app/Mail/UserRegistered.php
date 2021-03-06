<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserRegistered extends Mailable
{
    use Queueable, SerializesModels;

    private $firstName;
    private $lastName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->firstName = "Mohamad";
        $this->lastName = "Samie";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.user-registered')->with([
            'fullName' => $this->firstName . " " . $this->lastName
        ]);
    }
}
