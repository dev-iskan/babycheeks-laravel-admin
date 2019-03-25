<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(BrandTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(AgeTableSeeder::class);
         $this->call(ProductTableSeeder::class);
    }
}
