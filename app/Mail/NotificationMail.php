<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    protected $columns_jp;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $columns_jp)
    {
        //
        $this->data = $data;
        $this->columns_jp = $columns_jp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'), config('app.name', 'LCMアンケート'))
                    ->subject('アンケート回答通知')
                    ->view('emails.notification')
                    ->with(['data'=>$this->data, 'columns_jp'=>$this->columns_jp])
                    ->attach(storage_path('app/public/img/uploaded/') . basename($this->data['photo_1']))
                    ->attach(storage_path('app/public/img/uploaded/') . basename($this->data['photo_2']));
    }
}
