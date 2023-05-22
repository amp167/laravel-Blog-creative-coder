<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', [BlogController::class, 'index']);
Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);
Route::get('/categories/{name:slug}', function (Category $name) {
    return view('blogs', [
        'blogs' => $name->blogs,
        'categories' => Category::all(),
        'currentCategory' => $name,
    ]);
});
Route::get('/authors/{name:slug}', function (User $name) {
    return view('blogs', [
        'blogs' => $name->blogs,
        'categories' => Category::all(),
    ]);
});
