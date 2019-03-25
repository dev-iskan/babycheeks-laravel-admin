<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Product::class, 500)->create()->each(function (\App\Models\Product $product) {
            $product->brand()->associate(\App\Models\Brand::inRandomOrder()->first())->save();
            $product->ages()->attach(\App\Models\Age::all()->random(4));
            $product->categories()->attach(\App\Models\Category::all()->random(3));
        });
    }
}
