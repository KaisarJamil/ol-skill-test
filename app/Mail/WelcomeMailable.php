<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from_name = "Prottoyon.gov.bd";
        $from_email = "kaisar.mistrisolutions@gmail.com";
        $subject = "Prottoyon: Registration Successfully Completed";
        return $this->from($from_email, $from_name)
            ->view('Emails.welcome_message')
            ->subject($subject)
        ;
    }
}
