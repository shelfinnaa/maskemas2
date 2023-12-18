<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\PageContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('page_contents')->insert([
            'name' => 'Home Banner 1 Top Tagline',
            'content' => 'Versatile, Functional, and Durable',
            'page' => 1
        ]);
        DB::table('page_contents')->insert([
            'name' => 'Home Banner 1 Title',
            'content' => 'Paper Cups',
            'page' => 1
        ]);
        DB::table('page_contents')->insert([
            'name' => 'Home Banner 2 Top Tagline',
            'content' => 'Versatile, Functional, and Durable',
            'page' => 1
        ]);
        DB::table('page_contents')->insert([
            'name' => 'Home Banner 2 Title',
            'content' => 'Paper FoodPacks',
            'page' => 1
        ]);
        DB::table('page_contents')->insert([
            'name' => 'Home Banner 2 Bottom Tagline',
            'content' => 'Available for all choices of food and snacks',
            'page' => 1
        ]);
        DB::table('page_contents')->insert([
            'name' => 'About Us Description',
            'content' => 'Our company is dedicated to offer outstanding packaging solutions and design services that help businesses in showcasing their products in the best possible manner. We specialize in meeting the various needs of our clients by providing a wide range of packaging solutions.',
            'page' => 2
        ]);
        DB::table('page_contents')->insert([
            'name' => 'About Us Title',
            'content' => 'Trusted Paper Packaging Store',
            'page' => 2
        ]);
        DB::table('page_contents')->insert([
            'name' => 'Vision',
            'content' => 'To be recognized as a leading force in packaging innovation, admired for our commitment to quality, sustainability, and customer satisfaction',
            'page' => 2
        ]);
        DB::table('page_contents')->insert([
            'name' => 'Mision',
            'content' => 'To deliver innovative, high-quality packaging solutions with a commitment to sustainability, customer satisfaction, and ethical business practices',
            'page' => 2
        ]);
        DB::table('page_contents')->insert([
            'name' => 'Email',
            'content' => 'maskemas@gmail.com',
            'page' => 3
        ]);
        DB::table('page_contents')->insert([
            'name' => 'Phone',
            'content' => '+62 881-7001-009',
            'page' => 3
        ]);
        DB::table('page_contents')->insert([
            'name' => 'Insta',
            'content' => '@maskemas',
            'page' => 3
        ]);
        DB::table('page_contents')->insert([
            'name' => 'Whatsapp',
            'content' => '08817001009',
            'page' => 3
        ]);


        //images
        DB::table('page_contents')->insert([
            'name' => 'Home Banner 1 Image',
            'content' => 'uploads/contents/papercups.png',
            'page' => 1
        ]);

        DB::table('page_contents')->insert([
            'name' => 'Home Banner 2 Image',
            'content' => 'uploads/contents/foodpacks.png',
            'page' => 1
        ]);


    }
}
