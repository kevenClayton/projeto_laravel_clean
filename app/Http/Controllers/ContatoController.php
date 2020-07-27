<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoEmail;

class ContatoController extends Controller
{


    public function enviaContato(Request $request){
       Mail::to('send@therioclening.com')->send(new ContatoEmail($request));
    }
}
