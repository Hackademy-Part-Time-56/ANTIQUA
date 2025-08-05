<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BecomeRevisor extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $user;

    public function __construct($data, User $user)
    {
        $this->data = $data;
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject('Nuova richiesta di collaborazione')
            ->view('mail.become-revisor');
    }
}
