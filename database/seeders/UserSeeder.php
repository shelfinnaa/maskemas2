<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'dummy',
            'password' => Hash::make('1234'),
            'email' => 'email@email.com',
            'usertype' => 'user'
        ]);
        DB::table('users')->insert([
            'name' => 'dummyadmin',
            'password' => Hash::make('1234'),
            'email' => 'email@email.net',
            'usertype' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'password' => Hash::make('admin123'),
            'email' => 'admin@gmail.com',
            'usertype' => 'admin'
        ]);
    }
}
