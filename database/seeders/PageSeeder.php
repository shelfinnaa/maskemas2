<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert([
            'name' => 'Home',
        ]);

        DB::table('pages')->insert([
            'name' => 'About Us',
        ]);

        DB::table('pages')->insert([
            'name' => 'Contact',
        ]);
    }
}
