<?php

namespace App\Listeners;

use App\Events\ProductOrdered;
use App\Models\Order;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SaveOrderToDatabase
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProductOrdered  $event
     * @return void
     */
    public function handle(ProductOrdered $event)
    {
        $order = Order::create($event->data);
        $order->product()->associate($event->product)->save();
    }
}
