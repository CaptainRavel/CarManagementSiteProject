<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRefuels;
use App\Models\UserReprairs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id = Auth::id();
        $user_name = User::select('name')->where('id', '=', $user_id)->get();
        $user_email = User::select('email')->where('id', '=', $user_id)->get();
        return view('user_account', ["user_name"=>$user_name,
                    "user_email"=>$user_email]);
    }

    public function update_nick(Request $request){

        $validated = $request->validate([
            'name' => 'required|max:255']);

        $user_id = Auth::id();
        $nick = $request->name;
        User::where('id', '=', $user_id)->update(['name' => $nick]);
    
        return redirect()->route('user_account');
    }
    public function update_email(Request $request){

        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users']]);

        $user_id = Auth::id();
        $mail = $request->email;
        User::where('id', '=', $user_id)->update(['email' => $mail]);
    
        return redirect()->route('user_account');
    }
    public function destroy_user(){

        $user_id = Auth::id();
        User::where('id', '=', $user_id)->delete();
        UserRefuels::where('user_id', '=', $user_id)->delete();
        UserReprairs::where('user_id', '=', $user_id)->delete();

        return redirect()->route('home');
    }

}
