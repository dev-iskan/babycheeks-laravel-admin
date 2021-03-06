<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function index()
    {
        return OrderResource::collection(Order::with('product')->unfinishedFirst()->latest()->paginate(9));
    }

    public function update(Request $request, Order $order)
    {
        $order->setFinished($request->get('finished'));
        return response()->json(['status' => __('custom.updated')], 200);
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return response()->json(['status' => __('custom.deleted')], 202);
    }
}
