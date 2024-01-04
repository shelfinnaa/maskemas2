<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //trays
        DB::table('product_types')->insert([
            'product' => 1,
            'name' => 'Paper Food Tray Medium',
            'code' => 'TM01',
            'volume' => 576,
            'dimension' => '160mm(L) x 90mm (W) x 40mm (H)',
            'pack_size' => '1000',
        ]);
        DB::table('product_types')->insert([
            'product' => 1,
            'name' => 'Paper Food Tray Large',
            'code' => 'TD01',
            'volume' => 756,
            'dimension' => '180mm(L) x 105mm (W) x 40mm (H)',
            'pack_size' => '1000',
        ]);
        DB::table('product_types')->insert([
            'product' => 1,
            'name' => 'Paper Dry Food Tray Large',
            'code' => 'TV07',
            'volume' => 756,
            'dimension' => '184mm(L) x 114mm (W) x 37mm (H)',
            'pack_size' => '1000',
        ]);

        //single wall hot cups
        DB::table('product_types')->insert([
            'product' => 4,
            'name' => 'Paper Hot Cup 4 oz',
            'code' => 'CH04',
            'volume' => 120,
            'dimension' => '61mm(Top) x 45mm (Bottom) x 37mm (Height)',
            'pack_size' => '3000',
        ]);
        DB::table('product_types')->insert([
            'product' => 4,
            'name' => 'Paper Hot Cup 6.5 oz',
            'code' => 'CH65',
            'volume' => 180,
            'dimension' => '73mm(Top) x 53mm (Bottom) x 77mm (Height)',
            'pack_size' => '2000',
        ]);
        DB::table('product_types')->insert([
            'product' => 4,
            'name' => 'Paper Hot Cup 9 oz',
            'code' => 'CH09',
            'volume' => 210,
            'dimension' => '76mm(Top) x 53mm (Bottom) x 93mm (Height)',
            'pack_size' => '1000',
        ]);
        DB::table('product_types')->insert([
            'product' => 4,
            'name' => 'Paper Hot Cup 12 oz',
            'code' => 'CH12',
            'volume' => 360,
            'dimension' => '90mm(Top) x 60mm (Bottom) x 127mm (Height)',
            'pack_size' => '1000',
        ]);

        //double wall hot cups
        DB::table('product_types')->insert([
            'product' => 5,
            'name' => 'Paper Hot Cup 4 oz',
            'code' => 'CH04',
            'volume' => 120,
            'dimension' => '61mm(Top) x 45mm (Bottom) x 37mm (Height)',
            'pack_size' => '3000',
        ]);
        DB::table('product_types')->insert([
            'product' => 5,
            'name' => 'Paper Hot Cup 6.5 oz',
            'code' => 'CH65',
            'volume' => 180,
            'dimension' => '73mm(Top) x 53mm (Bottom) x 77mm (Height)',
            'pack_size' => '2000',
        ]);
        DB::table('product_types')->insert([
            'product' => 5,
            'name' => 'Paper Hot Cup 9 oz',
            'code' => 'CH09',
            'volume' => 210,
            'dimension' => '76mm(Top) x 53mm (Bottom) x 93mm (Height)',
            'pack_size' => '1000',
        ]);
        DB::table('product_types')->insert([
            'product' => 5,
            'name' => 'Paper Hot Cup 12 oz',
            'code' => 'CH12',
            'volume' => 360,
            'dimension' => '90mm(Top) x 60mm (Bottom) x 127mm (Height)',
            'pack_size' => '1000',
        ]);

        //paper bowls
        DB::table('product_types')->insert([
            'product' => 6,
            'name' => 'Paper Bowl 12 oz',
            'code' => 'BS12',
            'volume' => 360,
            'dimension' => '107mm(Top) x 92mm (Bottom) x 77mm (Height)',
            'pack_size' => '1000',
        ]);
        DB::table('product_types')->insert([
            'product' => 6,
            'name' => 'Paper Bowl 17 oz',
            'code' => 'BS17',
            'volume' => 500,
            'dimension' => '112mm(Top) x 92mm (Bottom) x 77mm (Height)',
            'pack_size' => '1000',
        ]);
        DB::table('product_types')->insert([
            'product' => 6,
            'name' => 'Paper Bowl 22 oz',
            'code' => 'BS22',
            'volume' => 650,
            'dimension' => '132mm(Top) x 109mm (Bottom) x 70mm (Height)',
            'pack_size' => '500',
        ]);
        DB::table('product_types')->insert([
            'product' => 6,
            'name' => 'Paper Bowl 27 oz',
            'code' => 'BS27',
            'volume' => 800,
            'dimension' => '132mm(Top) x 105mm (Bottom) x 85mm (Height)',
            'pack_size' => '500',
        ]);
    }
}
