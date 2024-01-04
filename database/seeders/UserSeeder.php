<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'dummy',
            'password' => '1234',
            'email' => 'email@email.com',
            'usertype' => 'user'
        ]);
        DB::table('users')->insert([
            'name' => 'dummyadmin',
            'password' => '1234',
            'email' => 'email@email.net',
            'usertype' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'password' => 'admin123',
            'email' => 'admin@gmail.com',
            'usertype' => 'admin'
        ]);
    }
}
