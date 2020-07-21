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

Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
   
    return view('test', [
        'name' => request('name')
    ]);
});

Route::get('/post/{post}', function ($post) {
    $posts = [
        'a' => "Hello, this is my first post blog!!",
        'my-second-post' => 'Now !'
    ];

    if(! array_key_exists($post, $posts))
        abort(404, 'Sorry that post was not found');
    return view('post',[
        'post' => $posts[$post] ?? 'Nothing here yet'
    ]);
});
