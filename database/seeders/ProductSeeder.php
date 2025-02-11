<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $product = new \App\Models\Product([
            'name' => 'Product #1',
            'details' => 'Product #1 details',
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #2',
            'details' => 'Product #2 details',
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #3',
            'details' => 'Product #3 details',
        ]);
        $product->save();
    }
}
