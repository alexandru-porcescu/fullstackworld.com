<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommandFinished extends Mailable
{
    use Queueable, SerializesModels;

    public $signature;

    public function __construct($signature)
    {
        $this->signature = $signature;
    }

    public function build()
    {
        return $this->from('hello@mail.fullstackworld.com', 'FullStackWorld')
            ->subject('Command Finished - '.$this->signature.' | '.Carbon::now())
            ->view('mails.command-finished')
            ->with(
                [
                    'signature' => $this->signature,
                ]);
    }
}
