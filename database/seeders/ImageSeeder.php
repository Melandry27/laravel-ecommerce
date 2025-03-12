<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Product;

class ImageSeeder extends Seeder
{
    public function run()
    {
        $products = Product::all();

        foreach ($products as $product) {
            Image::create([
                'url'           => "https://placehold.co/150?text={$product->name}",
                'imageable_id'   => $product->id,
                'imageable_type' => Product::class,
            ]);
        }
    }
}
