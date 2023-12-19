<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status1 = OrderStatus::create([
            'name' => 'In discussion'
        ]);

        $status2 = OrderStatus::create([
            'name' => 'Payment Process'
        ]);

        $status3 = OrderStatus::create([
            'name' => 'Packing'
        ]);

        $status4 = OrderStatus::create([
            'name' => 'On-Route'
        ]);

        $status5 = OrderStatus::create([
            'name' => 'Delivered'
        ]);

        $status6 = OrderStatus::create([
            'name' => 'Received'
        ]);

    }
}
