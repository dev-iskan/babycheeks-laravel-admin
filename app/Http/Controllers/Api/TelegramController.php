<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Telegram\SendOrderRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\Telegram\SendFeedbackRequest;
use App\Jobs\SendFeedback;
use App\Jobs\SendOrder;
use App\Jobs\SendProduct;
use App\Models\Product;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{

    public function index() {
        return Telegram::getUpdates();
    }

    public function sendOrder(SendOrderRequest $request, Product $product) {
        SendOrder::dispatch($request->all(), $product);
        return response()->json(['status' => 'Successfully sent!'],201);
    }

    public function sendProduct (Product $product) {
        SendProduct::dispatchNow($product);
        return response()->json(['status' => 'Successfully sent!'],201);
    }

    public function sendFeedback (SendFeedbackRequest $request) {
        SendFeedback::dispatch($request->all());
        return response()->json(['status' => 'Successfully sent!'],201);
    }
}