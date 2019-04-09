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
        $ages = $this->product->ages->pluck('age')->map(function ($age) {
            return '#'.str_slug($age, '_');
        });
        $ages = implode(', ', $ages->toArray());

        $categories = $this->product->categories->pluck('slug')->map(function ($slug) {
            return '#'.str_slug($slug, '_');
        });

        $categories = implode(', ', $categories->toArray());

        $text = view('telegram.product', [
            'name' => $this->product->name,
            'ages' => $ages,
            'categories' => $categories,
            'brand_name' => '#'.str_slug($this->product->brand->slug, '_'),
            'formatted_price' => $this->product->formatted_price,
            'formatted_gender' => $this->product->formatted_gender
        ])->render();
        $photo = InputFile::create($this->product->getMedia('products')->first()->getFullUrl());
        Telegram::sendPhoto([
            'chat_id' => config('telegram.chats.user_id'),
            'photo' => $photo,
            'caption' => $text
        ]);
    }
}
