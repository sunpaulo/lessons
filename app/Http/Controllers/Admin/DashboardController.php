<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Models\Category;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            'categories' => Category::lastCategories(5),
            'articles' => Article::lastArticles(5),
            'categories_count' => Category::count(),
            'articles_count' => Article::count(),
        ]);
    }
}
