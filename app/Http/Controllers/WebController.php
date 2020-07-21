<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('front.home', ['title' => 'Your clean house is practica']);

    }
    public function book_now()
    {
        return view('front.book-now',['title' => 'Your clean house is practica'] );
    }
    public function contact()
    {
        return view('front.contact',['title' => 'Your clean house is practica']);
    }
    public function about()
    {
        return view('front.about',['title' => 'Your clean house is practica']);
    }
    public function faq()
    {
        return view('front.faq',['title' => 'Your clean house is practica']);
    }
    public function tiktok()
    {
        return view('front.tiktok',['title' => 'Your clean house is practica']);
    }
}


