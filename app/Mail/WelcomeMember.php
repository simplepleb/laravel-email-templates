<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMember extends Mailable
{
    use Queueable, SerializesModels;

    public $member;
    public $options;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $member, $options = null)
    {
        $this->member = $member;
        $this->options = $options;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.welcome_message')->with([
            'options' => $this->options
        ]);
    }
}
