<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PageSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\PageContentSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(PageSeeder::class);
        $this->call(PageContentSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(OrderStatusSeeder::class);
        $this->call(UserSeeder::class);
    }
}
