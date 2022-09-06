<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BinEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var $data
     */
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
        return $this->subject('Bin notification')
            ->markdown('emails.bin', [
                "url" => route('bin.show', $this->data['bin']),
                "data" => $this->data,
            ]);

    }
}
