<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexPageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function oblicz()
    {
        return view('oblicz_spalanie');
    }

    public function privacypolicy(){
        return view('privacy_policy');
    }

    public function termsofservice(){
        return view('terms_of_service');
    }
}
