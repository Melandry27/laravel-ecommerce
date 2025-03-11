<?php

namespace App\Http\Controllers;

use App\Models\Category;

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

        return view('home', compact('categories', 'categoriesNavbar'));
    }
}
