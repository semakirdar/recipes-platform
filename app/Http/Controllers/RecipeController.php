<?php

namespace App\Http\Controllers;

use App\Http\Requests\Recipes\StoreRequest;
use App\Models\Category;
use App\Models\Ingredient;
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

    public function store(StoreRequest $request)
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
        foreach ($request->ingredients as $ingredient) {

           Ingredient::query()->create([
                'recipe_id' => $recipe->id,
                'name' => $ingredient,
                'sort_order' => 0

            ]);
        }


        $recipe->addMediaFromRequest('image')->toMediaCollection();

        return redirect()->route('home');
    }
}
