<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all() //ini method static
    ]);
});

//ini untuk detail post, dia filter berdasarkan slug yang ada di tiap post
Route::get('/posts/{post:slug}', function (Post $post) {
    // dd($id);
    // $post = Post::find($id);
    //wkwkwk ini untuk laravel 11, i pake laravel 12 sekarang
    // $post = Arr::first($posts, function($post) use ($id){
    //     return $post['id'] == $id;
    //     //kalo sama dengan ada 3 nanti bandingkan 2 tipe data yang beda
    // });

    return view('post', ['title' => 'Blog Detail', 'post' => $post]);
    // return view('contact', ['title' => 'Contact Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'name' => 'Chavel Aiko Ratu']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});