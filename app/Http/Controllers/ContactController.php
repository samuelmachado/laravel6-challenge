<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() 
    {
        return view('contacts.index');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);

        Mail::to(request('email'))->send(new Contact());
        // Mail::raw('it Works', function($message){
        //     $message->to(request('email'))->subject('Hello there');
        // });

        return redirect('/contact')->with('message', 'Email sent!');
    }
}
