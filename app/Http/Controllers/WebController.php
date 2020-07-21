<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('front.home');
    }
    public function book_now()
    {
        return view('front.book-now');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function about()
    {
        return view('front.about');
    }
}


