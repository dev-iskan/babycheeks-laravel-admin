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
        factory(\App\Models\Product::class, 1000)->create()->each(function (\App\Models\Product $product) {
            $product->brand()->associate(\App\Models\Brand::inRandomOrder()->first())->save();
            $product->categories()->attach(\App\Models\Category::all()->random(3));
        });
    }
}
