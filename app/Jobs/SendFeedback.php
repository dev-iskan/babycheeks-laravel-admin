<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Telegram\Bot\Laravel\Facades\Telegram;

class SendFeedback implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $data;
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $text= view('telegram.feedback', [
            'phone' => $this->data['phone'],
            'name' => $this->data['name'],
            'text' => $this->data['text']
        ])->render();
        Telegram::sendMessage([
            'chat_id' => config('telegram.chats.user_id'),
            'text' => $text,
            'parse_mode' => 'Markdown'
        ]);
    }
}
