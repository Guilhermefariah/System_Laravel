<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Produto 1',
                'price' => 49.99,
                'description' => 'Descrição do Produto 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Produto 2',
                'price' => 79.90,
                'description' => 'Descrição do Produto 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Produto 3',
                'price' => 120.00,
                'description' => 'Descrição do Produto 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
