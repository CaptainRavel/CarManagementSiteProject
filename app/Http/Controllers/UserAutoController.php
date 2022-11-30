<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAutoController extends Controller
{
    public function index()
    {
        return view('user_auto');
    }
}
