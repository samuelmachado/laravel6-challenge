<?php

use App\Article;
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
    return view('welcome');
});
Route::get('/about', function () {
    
    return view('about', [ 
        'articles' =>  App\Article::take(2)->latest()->get()
    ]);
});
Route::get('/', function () {
   
    return view('test', [
        'name' => request('name')
    ]);
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/posts/{post}', 'PostsController@show');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');


// /articles
// /articles /