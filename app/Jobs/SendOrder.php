<?php

namespace App\Jobs;

use App\Events\ProductOrdered;
use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Telegram\Bot\Laravel\Facades\Telegram;

class SendOrder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $product;
    protected $data;
    public function __construct(array $data, Product $product)
    {
        $this->product = $product;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $text= view('telegram.order', [
            'phone' => $this->data['phone'],
            'name' => $this->data['name'],
            'product_name' => $this->product->name,
            'url' => 'http://babycheeks.test'
        ])->render();
        $response = Telegram::sendMessage([
            'chat_id' => config('telegram.chats.user_id'),
            'text' => $text,
            'parse_mode' => 'Markdown'
        ]);

        if ($response->getMessageId()) {
            event(new ProductOrdered($this->product, $this->data));
        };
    }
}
