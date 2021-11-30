<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'name' => 'Apple Macbook Pro 16',
                'detail' => 'Apple M1 Pro, 16 GPU, 16GB, 512 GB SDD',
                'description' => 'The most powerful MacBook Pro ever is here. With the blazing-fast M1 Pro or M1 Max chip — the first Apple silicon designed for pros — you get groundbreaking performance and amazing battery life. Add to that a stunning Liquid Retina XDR display, the best camera and audio ever in a Mac notebook, and all the ports you need. The first notebook of its kind, this MacBook Pro is a beast.',
                'brand' => 'Apple',
                'price' => 2499,
                'shiping_cost' => 35,
                'image_path' => 'storage/product.png',
            ],
            [
                'name' => 'Samsung Galaxy Book Pro',
                'detail' => '13.3 inch, 8GB, DRR4 SDRAM, 256 GB',
                'description' => 'PC power that’s smartphone thin. Our lightest Galaxy Book yet gives you a powerful Intel® 11th Gen Core™ processor, Intel® Evo™ certification, an advanced AMOLED screen and comes equipped with our latest wi-fi chip. Finish important projects, download huge files fast or watch movies in brilliant color. Discover the perfect mix of portability and productivity.',
                'brand' => 'Sam Sung',
                'price' => 1400,
                'shiping_cost' => 35,
                'image_path' => 'storage/product2.png',
            ]
        ];

        foreach($product as $key => $values) 
        {
            Product::create($values);
        }
    }
}
