<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    public function __construct(array $data)
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
        return $this->replyTo($this->data['reply_email'], $this->data['reply_name'])
            ->to('daniel24maio@hotmail.com','Vai, meninas!')
            ->from('daniel24maio@hotmail.com','Vai, meninas!')
            ->subject('Novo Contato: ' . $this->data['subject'])
            ->markdown('email.contact', [
               'reply_name' => $this->data['reply_name'],
               'reply_email' => $this->data['reply_email'],
               'subject' => $this->data['subject'],
               'message' => $this->data['message']
            ]);
    }
}
