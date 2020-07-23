<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PagesController extends Controller
{
    public function home()
    {
        return  request('name');
        
        return View::make('welcome');
    }
}
