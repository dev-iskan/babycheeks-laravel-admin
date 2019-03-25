<?php

use Illuminate\Database\Seeder;

class AgeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Age::class, 20)->create();
    }
}
