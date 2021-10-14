<?php

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Yuji Itadori",
        "email" => "YujiItadori@gmail.com",
        "image" => "jujutsu.png"
    ]);
});



Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yuji Itadori",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos minus unde omnis 
            facere necessitatibus eveniet at, non iste tempore aliquam veniam 
            iure nam ducimus odio ea recusandae, inventore rem facilis quidem, maxime corrupti ullam. Vitae natus doloribus vero adipisci sapiente consectetur, enim ipsa! Sed hic fugiat incidunt, tempore itaque, qui earum animi impedit natus, odio est perferendis expedita ab eum dolorem a rerum odit deleniti sunt eligendi? Aut atque beatae aliquid sapiente error, delectus voluptatibus soluta laudantium, adipisci, culpa esse?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Roby Oboy",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos minus unde omnis 
            facere necessitatibus eveniet at, non iste tempore aliquam veniam 
            iure nam ducimus odio ea recusandae, inventore rem facilis quidem, maxime corrupti ullam. 
            Vitae natus doloribus vero adipisci sapiente consectetur, enim ipsa! Sed hic fugiat incidunt, 
            tempore itaque, qui earum animi impedit natus, odio est perferendis expedita ab eum dolorem a 
            rerum odit deleniti sunt eligendi? Aut atque beatae aliquid sapiente error, delectus voluptatibus 
             soluta laudantium, adipisci, culpa esse?"
        ],
        ];


     return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman singgle post

Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yuji Itadori",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos minus unde omnis 
            facere necessitatibus eveniet at, non iste tempore aliquam veniam 
            iure nam ducimus odio ea recusandae, inventore rem facilis quidem, maxime corrupti ullam. Vitae natus doloribus vero adipisci sapiente consectetur, enim ipsa! Sed hic fugiat incidunt, tempore itaque, qui earum animi impedit natus, odio est perferendis expedita ab eum dolorem a rerum odit deleniti sunt eligendi? Aut atque beatae aliquid sapiente error, delectus voluptatibus soluta laudantium, adipisci, culpa esse?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Roby Oboy",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos minus unde omnis 
            facere necessitatibus eveniet at, non iste tempore aliquam veniam 
            iure nam ducimus odio ea recusandae, inventore rem facilis quidem, maxime corrupti ullam. 
            Vitae natus doloribus vero adipisci sapiente consectetur, enim ipsa! Sed hic fugiat incidunt, 
            tempore itaque, qui earum animi impedit natus, odio est perferendis expedita ab eum dolorem a 
            rerum odit deleniti sunt eligendi? Aut atque beatae aliquid sapiente error, delectus voluptatibus 
             soluta laudantium, adipisci, culpa esse?"
        ],
        ];
        $new_post = [];
        foreach($blog_posts as $post){
            if($post["slug"] === $slug){
                $new_post = $post;
            }
        }
         
    return view ('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});