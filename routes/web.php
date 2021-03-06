<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('test', function () {
    echo Hash::make('zguH82QR&U!&');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
Route::post('/recipes/store', [RecipeController::class, 'store'])->name('recipes.store');
Route::get('/recipe/{id}/detail', [RecipeController::class, 'show'])->name('recipe.show');


Route::get('/categories/{id}/show', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/ajax', [HomeController::class, 'ajaxTest']);
Route::get('/ajax/detail/{id}', [HomeController::class, 'ajaxDetail']);

include 'admin.php';
