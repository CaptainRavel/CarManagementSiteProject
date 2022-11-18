<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRefuels;
use App\Models\UserReprairs;
use App\Models\UserVerify;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


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
        UserVerify::where('user_id', '=', $user_id)->delete();
        $mail = $request->email;
        User::where('id', '=', $user_id)->update(['email' => $mail]);       
        User::where('id', '=', $user_id)->update(['is_email_verified' => 0]); 

        $token = Str::random(64);
  
        UserVerify::create([
              'user_id' => $user_id, 
              'token' => $token
            ]);
  
        Mail::send('email.emailVerificationEmail', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Zweryfikuj swój adres e-mail');
          });

        return redirect()->route('login')
        ->with('not verified', 'Aby się zalogować, zweryfikuj zwój adres-email. Wysłaliśmy ci link, jeśli masz kłopot skontaktuj się z administratorem.');
    }
    public function destroy_user(){

        $user_id = Auth::id();
        User::where('id', '=', $user_id)->delete();
        UserRefuels::where('user_id', '=', $user_id)->delete();
        UserReprairs::where('user_id', '=', $user_id)->delete();

        return redirect()->route('home');
    }

}
