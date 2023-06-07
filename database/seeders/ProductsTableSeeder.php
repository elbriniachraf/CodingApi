<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = [
            [
                'name' => 'watch 1',
                'description' => 'This is watch 1.',
                'price' => 200.50,
            ],
            [
                'name' => 'watch 2',
                'description' => 'This is watch 2.',
                'price' => 450,
            ],
            // Add more products as needed
        ];

        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
    }
}
