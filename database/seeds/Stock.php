<?php

use App\Products;
use Illuminate\Database\Seeder;

class Stock extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'name' => 'MacBook Pro',
            'details' => '15 pulgadas, 1TB HDD, 32GB RAM',
            'price' => 2499.99,
            'shipping_cost' => 29.99,
            'description' => 'MackBook Pro',
            'image_path' => 'macbook-pro.png'
        ]);
    }
}
