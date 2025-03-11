<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->with(['products', 'parent'])->firstOrFail();
    
        $categoriesNavbar = Category::whereNull('parent_id')->get()->map(function ($category) {
            return [
                'name' => $category->name,
                'url' => route('category.show', $category->slug),
            ];
        });

        $breadcrumbItems[] = ['name' => 'Accueil', 'url' => route('home')];
        
        if ($category->name) {
             $breadcrumbItems[] = ['name' => $category->name, 'url' => route('category.show', $category->slug)];
        }
    
        return view('category', compact('categoriesNavbar', 'breadcrumbItems', 'category'));
    }
}
