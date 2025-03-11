<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            for ($i = 1; $i <= 5; $i++) {
                $product = Product::create([
                    // Génération de noms de produits aléatoires basés sur la catégorie
                    'name'        => "{$category->name} Product {$i}",
                    // Description générique pour chaque produit
                    'description' => "This is a description of {$category->name} Product {$i}.",
                    // Prix aléatoire entre 10 et 1000
                    'price'       => rand(10, 1000),
                    // Statut actif ou inactif aléatoire
                    'active'      => rand(0, 1),
                ]);

                // Associer le produit à la catégorie
                $product->categories()->attach($category->id);
            }
        }
    }
}
