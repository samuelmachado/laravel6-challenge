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

Route::get('/', function () {
   $container = new Container();
   $container->bind('example', function() {
    return new Example();
   });
   $ex = $container->resolve('example');
   $ex->go();
   ddd($ex);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
