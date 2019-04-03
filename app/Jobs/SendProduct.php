<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;

class SendProduct implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $text = view('telegram.product', [
            'name' => $this->product->name,
            'brand' => $this->product->brand
        ])->render();
        $photo = InputFile::create($this->product->getMedia('products')->first()->getFullUrl());
        Telegram::sendPhoto([
            'chat_id' => env('TELEGRAM_USER_ID'),
            'photo' => $photo,
            'caption' => $text,
        ]);
    }
}
