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
        factory(\App\Models\Product::class, 5000)->create()->each(function (\App\Models\Product $product) {
            $product->brands()->attach(\App\Models\Brand::all()->random(3));
            $product->categories()->attach(\App\Models\Category::all()->random(3));
        });
    }
}
