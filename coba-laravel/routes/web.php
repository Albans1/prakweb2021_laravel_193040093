<?php


use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Yuji Itadori",
        "email" => "YujiItadori@gmail.com",
        "image" => "jujutsu.png"
        
    ]);
});



Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post:slug}',[PostController::class, 'show']);


Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Catregories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

