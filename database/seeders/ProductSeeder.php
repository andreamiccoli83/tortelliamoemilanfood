<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Tortellini Freschi',
                'description' => 'Tortellini tradizionali fatti a mano con ripieno di carne. 500g',
                'price' => 8.50,
                'image' => 'images/products/tortellini.jpg',
                'stripe_payment_link' => '', // Lo aggiungerai dopo
                'is_active' => true,
                'stock_available' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'Tagliatelle all\'uovo',
                'description' => 'Tagliatelle fresche all\'uovo, ideali per ragù. 400g',
                'price' => 6.00,
                'image' => 'images/products/tagliatelle.jpg',
                'stripe_payment_link' => '',
                'is_active' => true,
                'stock_available' => true,
                'sort_order' => 2
            ],
            [
                'name' => 'Lasagne',
                'description' => 'Lasagne pronte al forno con ragù bolognese. 1kg',
                'price' => 12.00,
                'image' => 'images/products/lasagne.jpg',
                'stripe_payment_link' => '',
                'is_active' => true,
                'stock_available' => true,
                'sort_order' => 3
            ],
            [
                'name' => 'Ravioli di Zucca',
                'description' => 'Ravioli ripieni di zucca mantovana e amaretti. 500g',
                'price' => 9.50,
                'image' => 'images/products/ravioli.jpg',
                'stripe_payment_link' => '',
                'is_active' => true,
                'stock_available' => true,
                'sort_order' => 4
            ],
            [
                'name' => 'Gnocchi di Patate',
                'description' => 'Gnocchi freschi di patate, pronti in 3 minuti. 500g',
                'price' => 5.50,
                'image' => 'images/products/gnocchi.jpg',
                'stripe_payment_link' => '',
                'is_active' => true,
                'stock_available' => true,
                'sort_order' => 5
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
