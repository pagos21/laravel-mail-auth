<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserAction extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $pizza;
    public $action;


    public function __construct($user, $pizza, $action)
    {
        $this -> user = $user;
        $this -> pizza = $pizza;
        $this -> action = $action;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this-> from('yo@me.com') -> view('mail.pizza_mail');
    }
}
