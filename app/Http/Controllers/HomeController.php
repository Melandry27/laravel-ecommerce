<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('parent_id')->get();

        $categoriesNavbar = Category::whereNull('parent_id')->get()->map(function ($category) {
        return [
            'name' => $category->name,
            'url' => route('category.show', $category->slug),
        ];
        });

        $five_random_products = Product::inRandomOrder()->limit(5)->get();

        $images_products = Image::whereIn('id', $five_random_products->pluck('id'))->get();

        $five_random_products->each(function ($product) use ($images_products) {
            $product->image = $images_products->firstWhere('id', $product->id);
        });

        return view('home', compact('categories', 'categoriesNavbar', 'five_random_products'));
    }
}
