<?php

use App\Container;
use App\Example;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//  ddd(resolve('App\Example'));
// });

Auth::routes();
Route::get('/', 'PagesController@home');

Route::get('/home', 'HomeController@index')->name('home');
