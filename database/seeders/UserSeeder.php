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
            'name' => 'admin',
            'password' => Hash::make('admin123'),
            'email' => 'admin@gmail.com',
            'usertype' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'IndoTech Solutions',
            'password' => Hash::make('indotech123'),
            'email' => 'Indotechsolution@gmail.com',
            'usertype' => 'user'
        ]);
        DB::table('users')->insert([
            'name' => 'BaliCraft Innovations',
            'password' => Hash::make('balicraft123'),
            'email' => 'Balicraftinnovation@gmail.com',
            'usertype' => 'user'
        ]);
        DB::table('users')->insert([
            'name' => 'JavaTech Ventures',
            'password' => Hash::make('javatech123'),
            'email' => 'javatechventures@gmail.com',
            'usertype' => 'user'
        ]);
        DB::table('users')->insert([
            'name' => 'CelebesGreen',
            'password' => Hash::make('celebesgreen123'),
            'email' => 'celebesgreen@gmail.com',
            'usertype' => 'user'
        ]);
        DB::table('users')->insert([
            'name' => 'KopiKreasi',
            'password' => Hash::make('kopikreasi123'),
            'email' => 'kopikreasi@gmail.com',
            'usertype' => 'user'
        ]);

    }
}
