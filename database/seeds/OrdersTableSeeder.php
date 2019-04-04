<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Order::class, 300)->create()->each(function (\App\Models\Order $order) {
            $order->product()->associate(\App\Models\Product::where('finished', false)->inRandomOrder()->first())->save();
        });
    }
}
