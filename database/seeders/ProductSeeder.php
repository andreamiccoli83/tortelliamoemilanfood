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
                'name' => 'Cappelletti',
                'description' => 'Cappeletti tradizionali fatti a mano con ripieno di carne. 500g',
                'price' => 8.50,
                'image' => 'images/products/cappelletti.jpg',
                'stripe_payment_link' => 'https://buy.stripe.com/test_eVq7sF2mT5lrdsPdR4dQQ03',
                'is_active' => true,
                'stock_available' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'Tagliatelle all\'uovo',
                'description' => 'Tagliatelle fresche all\'uovo, ideali per ragù. 400g',
                'price' => 6.00,
                'image' => 'images/products/tagliatelle.jpg',
                'stripe_payment_link' => 'https://buy.stripe.com/test_eVq5kxf9FdRX74rbIWdQQ02',
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
                'name' => 'Tortelli di Zucca',
                'description' => 'Tortelli ripieni di zucca mantovana e amaretti. 500g',
                'price' => 9.50,
                'image' => 'images/products/tortelli_zucca.jpg',
                'stripe_payment_link' => '',
                'is_active' => true,
                'stock_available' => true,
                'sort_order' => 4
            ],
            [
                'name' => 'Parmigiana di melenzane',
                'description' => 'Parmigiana di melenzane, con verdure selezionate. 500g',
                'price' => 5.50,
                'image' => 'images/products/parmigiana_melanzane.jpg',
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
