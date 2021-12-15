<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
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

    public function store(Request $request)
    {
        $recipe = Recipe::query()->create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'category_id' => $request->category_id,
            'prepare_time' => $request->prepare_time,
            'cooking_time' => $request->cooking_time,
            'serving' => $request->serving,
            'description' => $request->description
        ]);

        $recipe->addMediaFromRequest('image')->toMediaCollection();

        return redirect()->route('home');
    }
}
