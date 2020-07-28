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
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');
Route::get('/payments/create','PaymentsController@create');
Route::get('/notifications', 'UserNotificationsController@show');

Route::get('/conversations', 'ConversationController@index');
Route::get('/conversations/{conversation}', 'ConversationController@show');

Route::post('/best-replies/{reply}', 'ConversationBestReplyController@store');

Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');
