<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\PagesController;
use \App\Models\Category;
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

Route::get('/', function () {
    return view("home", [
        'title' => "Home"
    ]);
});

Route::get('/about', function () {
    return view("about", [
        "title" => "About",
        "nama" => "Muhammad Arief",
        "email" => "maklogeming@gmail.com",
        "image" => "luffy.jpg"
    ]);
});



Route::get('/blog', [PostController::class, 'index']);

//halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);
//about
Route::get('/about', [PagesController::class, 'about']);

Route::get('/categories', function () {
    return view('categories', [
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
