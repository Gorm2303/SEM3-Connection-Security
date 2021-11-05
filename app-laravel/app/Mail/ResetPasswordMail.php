<?php

namespace App\Mail;
use app\Providers;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $status;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct(Providers $providers)
    {
        $this->providers = $providers;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        return $this->view('mails.mail')
            ->with([
                'passwordResetLink' =>$this->providers->sendResetLink
    ]);
    }
}

