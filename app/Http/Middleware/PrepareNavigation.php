<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Category;

class PrepareNavigation
{
    public function handle(Request $request, Closure $next)
    {
        $categoriesNavbar = Category::whereNull('parent_id')->get()->map(function ($category) {
            return [
                'name' => $category->name,
                'url' => route('category.show', $category->slug),
            ];
        });

        $breadcrumbItems = [
            ['name' => 'Accueil', 'url' => route('home')]
        ];

        view()->share('categoriesNavbar', $categoriesNavbar);
        view()->share('breadcrumbItems', $breadcrumbItems);

        return $next($request);
    }
}
