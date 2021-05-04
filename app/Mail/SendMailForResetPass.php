<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailForResetPass extends Mailable
{
    use Queueable, SerializesModels;

    public $token_data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($token_data)
    {
        $this->token_data = $token_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->html("hello word");
        return $this->subject('reset password')
                    ->view('auth.password.dynamic_email_template');
    }
}
