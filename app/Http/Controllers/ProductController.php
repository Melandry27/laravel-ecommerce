<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function show($id)
    {
        // Récupérer le produit avec ses catégories et images
        $product = Product::with(['categories', 'images'])->findOrFail($id);

        // Retourner la vue avec le produit
        return view('product', compact('product'));
    }
}
