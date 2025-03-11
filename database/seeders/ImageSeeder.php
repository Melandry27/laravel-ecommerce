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
                // URL d'image générée dynamiquement avec le nom du produit
                'url'           => "https://via.placeholder.com/150?text={$product->name}",
                // ID du produit associé (relation polymorphe)
                'imageable_id'   => $product->id,
                // Type du modèle associé (relation polymorphe)
                'imageable_type' => Product::class,
            ]);
        }
    }
}
