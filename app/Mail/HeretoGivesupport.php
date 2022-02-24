<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HeretoGivesupport extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data3)
    {
        $this->data3 = $data3;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {  return $this->markdown('emails.givesupport')
        ->subject('New User')
        ->with('data3', $this->data3);
    }
}
