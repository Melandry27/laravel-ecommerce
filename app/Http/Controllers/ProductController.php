<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->with(['categories', 'images'])->firstOrFail();

        $first_category = $product->categories->first();

        $breadcrumbItems = [
            ['name' => 'Accueil', 'url' => route('home')]
        ];

        if ($first_category->name && $first_category->slug) {
            $breadcrumbItems[] = ['name' => $first_category->name, 'url' => route('category.show', $first_category->slug)];
        }

        if ($product->name) {
            $breadcrumbItems[] = ['name' => $product->name, 'url' => route('product.show', $product->slug)];
        }

        return view('product', compact('product', 'breadcrumbItems'));
    }
}   