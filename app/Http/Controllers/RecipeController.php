<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function create()
    {
        $categories = Category::query()->get();
        return view('site.recipes.create', [
            'categories' => $categories
        ]);
    }

    public function store()
    {

    }
}
