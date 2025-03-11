<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            // Electronics
            [
                'name' => 'Electronics',
                'description' => 'All kinds of electronic items',
                'children' => [
                    ['name' => 'Smartphones', 'description' => 'Mobile phones and accessories'],
                    ['name' => 'Laptops', 'description' => 'Laptops and accessories'],
                    ['name' => 'Headphones', 'description' => 'Audio devices and accessories'],
                    ['name' => 'Cameras', 'description' => 'Digital cameras and equipment'],
                ],
            ],

            // Books
            [
                'name' => 'Books',
                'description' => 'Books and magazines',
                'children' => [
                    ['name' => 'Fiction', 'description' => 'Novels and stories'],
                    ['name' => 'Non-Fiction', 'description' => 'Biographies, essays, and more'],
                    ['name' => 'Children', 'description' => "Children's books"],
                    ['name' => 'Comics', 'description' => "Graphic novels and comic books"],
                ],
            ],

            // Clothing
            [
                'name' => 'Clothing',
                'description' => "Men's and Women's clothing",
                'children' => [
                    ['name' => "Men's Clothing", 'description' => "Clothing for men"],
                    ['name' => "Women's Clothing", 'description' => "Clothing for women"],
                    ['name' => "Kids' Clothing", 'description' => "Clothing for children"],
                    ['name' => "Accessories", 'description' => "Belts, hats, scarves, etc."],
                ],
            ],

            // Home & Garden
            [
                'name' => 'Home & Garden',
                'description' => "Items for home improvement and gardening",
                'children' => [
                    ['name' => "Furniture", 'description' => "Indoor and outdoor furniture"],
                    ['name' => "Kitchen", 'description' => "Cookware and kitchen tools"],
                    ['name' => "Decor", 'description' => "Home decor items"],
                    ['name' => "Gardening", 'description' => "Tools and plants for gardening"],
                ],
            ],
        ];

        foreach ($categories as $categoryData) {
            $parent = Category::create([
                'name'        => $categoryData['name'],
                'description' => $categoryData['description'],
            ]);

            foreach ($categoryData['children'] as $childData) {
                Category::create([
                    'name'        => $childData['name'],
                    'description' => $childData['description'],
                    'parent_id'   => $parent->id,
                ]);
            }
        }
    }
}
