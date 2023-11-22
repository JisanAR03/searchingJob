<?php

namespace App\Http\Controllers;

use App\Models\SuperUser;
use Illuminate\Http\Request;

class SuperUserController extends Controller
{
    public function developerlook_index()
    {
        return view('superuser.login');
    }
    public function developerlook_login(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        if(!$validation){
            return redirect()->route('home')->with('error', 'Invalid Email or Password');
        }
        $user_data = SuperUser::where('email', $request->email)->first();
        if(($user_data->password == $request->password)){
            $request->session()->put('super_admin_session', $user_data->id);
            return redirect()->route('mailSystem')->with('success', 'Login Successfully');
        }
        else{
            return redirect()->route('home')->with('error', 'Invalid Email or Password');
        }
        
    }
    public function developerlook_mailSystem()
    {
        if(session()->has('super_admin_session')){
            return view('superuser.email_system');
        }
        else{
            return redirect()->route('home')->with('error', 'Please Login First');
        }
    }
}
