<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $regCode;
    private $msgText;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($regCode,$msg)
    {
        $this->regCode   = $regCode;
        $this->msgText = $msg;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //todo -from email
        //todo from name
        return $this->from('example@example.com', 'yyyyy')
            ->subject('Registration - granfondo.com')
            ->view('email.register')
            ->with ('reg_code',$this->regCode)
            ->with ('msgText', $this->msgText);
    }
}
