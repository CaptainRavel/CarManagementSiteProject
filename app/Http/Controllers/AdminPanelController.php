<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminPanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function user_list()
    {
        $user_list = User::select('id','name','email','role')->paginate(5, ['*']);
        return view('admin_panel', ["user_list"=>$user_list]);
    }
}
