<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\SendOrderRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\Telegram\SendFeedbackRequest;
use App\Models\Product;
use GuzzleHttp\Client;
use Telegram\Bot\FileUpload\InputFile;

class TelegramController extends Controller
{
    protected $telegram;
    public function __construct()
    {
        $this->telegram = app('telegram')/*->setAsyncRequest(true)*/;
    }

    public function index() {
        return $this->telegram->getUpdates();
    }

    public function sendOrder(SendOrderRequest $request, Product $product) {
        $text= view('telegram.order', [
            'phone' => $request->phone,
            'name' => $request->name,
            'product_name' => $product->name,
            'url' => 'http://babycheeks.test'
        ])->render();
        $this->telegram->sendMessage([
            'chat_id' => env('TELEGRAM_USER_ID'),
            'text' => $text,
            'parse_mode' => 'Markdown'
        ]);
        return response()->json();
    }

    public function sendProduct (Product $product) {
        $text = view('telegram.product', [
            'name' => $product->name,
            'brand' => $product->brand
        ])->render();
        $photo = InputFile::create($product->getMedia('products')->first()->getFullUrl());
        $this->telegram->sendPhoto([
            'chat_id' => env('TELEGRAM_USER_ID'),
            'photo' => $photo,
            'caption' => $text,
        ]);
        return response()->json();
    }

    public function sendFeedback (SendFeedbackRequest $request) {
        $text= view('telegram.feedback', [
            'phone' => $request->phone,
            'name' => $request->name,
            'text' => $request->text
        ])->render();
        $this->telegram->sendMessage([
            'chat_id' => env('TELEGRAM_USER_ID'),
            'text' => $text,
            'parse_mode' => 'Markdown'
        ]);
        return response()->json();
    }
}
