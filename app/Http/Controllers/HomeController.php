<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::query()->with('category')->get();
        $categories = Category::query()->get();
        return view('site.home', [
            'categories' => $categories,
            'recipes' => $recipes
        ]);

    }


    public function ajaxTest()
    {
        $recipes = Recipe::query()->get();
        return view('site.ajax-test', [
            'recipes' => $recipes
        ]);
    }

    public function ajaxDetail($id)
    {
        $recipe = Recipe::query()->where('id', $id)->first();

        return response()->json([
            'data' => $recipe
        ]);
    }
}
