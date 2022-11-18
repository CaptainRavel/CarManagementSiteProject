<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRefuels;
use App\Models\UserReprairs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function user_edit(Request $request, $id){
        $user_id = $id;
        $user_name = User::select('name')->where('id', '=', $user_id)->get();
        $user_email = User::select('email')->where('id', '=', $user_id)->get();
        $user_role = User::select('role')->where('id', '=', $user_id)->get();
        $user_verify_status = User::select('is_email_verified')->where('id', '=', $user_id)->get();
        return view('user_management', ["user_id"=>$user_id,"user_name"=>$user_name,
                    "user_email"=>$user_email, "user_role"=>$user_role, "user_verify_status"=>$user_verify_status]);
    }

    public function update_nick(Request $request, $id){

        $validated = $request->validate([
            'name' => 'required|max:255']);

        $user_id = $id;
        $nick = $request->name;
        User::where('id', '=', $user_id)->update(['name' => $nick]);
    
        return redirect()->route('admin_panel');
    }
    public function update_email(Request $request, $id){

        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users']]);

        $user_id = $id;
        $mail = $request->email;
        User::where('id', '=', $user_id)->update(['email' => $mail]);
    
        return redirect()->route('admin_panel');
    }
    public function update_password(Request $request, $id){

        $validated = $request->validate([
            'password' => ['required', 'string', 'min:8']]);

        $user_id = $id;
        $pass = Hash::make($request->password);
        User::where('id', '=', $user_id)->update(['password' => $pass]);
    
        return redirect()->route('admin_panel');
    }
    public function destroy_user($id){

        $user_id = $id;
        User::where('id', '=', $user_id)->delete();
        UserRefuels::where('user_id', '=', $user_id)->delete();
        UserReprairs::where('user_id', '=', $user_id)->delete();

        return redirect()->route('admin_panel');
    }
}
