<?php

use Illuminate\Contracts\Mail\Mailer;
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


Route::get('/', 'WebController@home')->name('home');
Route::get('/book-now', 'WebController@book_now')->name('book_now');
Route::get('/about', 'WebController@about')->name('about');
Route::get('/contact', 'WebController@contact')->name('contact');
Route::get('/faq', 'WebController@faq')->name('faq');
Route::get('/tiktok', 'WebController@tiktok')->name('tiktok');

Route::post('/enviar', 'ContatoController@enviaContato');
