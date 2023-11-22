<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployerLoginController extends Controller
{
    public function developerlook_index(){
        return view('employers-login');
    }
    public function developerlook_employer_login(Request $request){ 
    $request->validate([
        'business_email' => 'required|email',
        'password' => 'required|min:8',
    ]);
    $user_data = Employer::where('BusinessEmail', $request->business_email)->first();
    if($user_data){
        if(($user_data->BusinessEmail == $request->business_email) && (Hash::check($request->password, $user_data->PasswordHash))){
            if(Str::length($user_data->CompanyName) == 0){
                $user_data->CompanyName = $request->company_name;
                $user_data->save();
                $request->session()->put('employer_session', $user_data->EmployerID);
                return redirect()->route('home')->with('success', 'Login Successfully');
            }
            else{
            if($user_data->CompanyName != $request->company_name){
                    return redirect()->route('employers-login')->with('error', 'Invalid Company Name');
                }
                $request->session()->put('employer_session', $user_data->EmployerID);
                return redirect()->route('home')->with('success', 'Login Successfully');
            }
        }
        else{
            return redirect()->route('employers-login')->with('error', 'Invalid Email or Password');
        }
    }
    else{
        return redirect()->route('employers-login')->with('error', 'Invalid Email or Password');
    }
    }
}