<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\VerificationEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class EmployerLoginController extends Controller
{
    public function developerlook_index(){
        return view('employers-login');
    }
    public function developerlook_employer_login(Request $request){ 
    try{
        $request->validate([
            'business_email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $user_data = Employer::where('BusinessEmail', $request->business_email)->first();
        if($user_data->verification_token == null && $user_data->is_verified == 1){
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
            return redirect()->route('employers-login')->with('error', 'verify your email first');
        }
    }
    catch(\Exception $e){
        return redirect()->route('employers-login')->with('error', 'Invalid Email or Password');
    }
    }
    public function developerlook_index_verify(){
        return view('employers-login-verify');
    }
    public function developerlook_employer_login_verify(Request $request){ 
        $business_mail = $request->input('business_email');
        $verificationToken = Str::random(40);
        $user_data = Employer::where('BusinessEmail', $business_mail)->first();
        if($user_data->verification_token == null && $user_data->is_verified == 1){
            return redirect()->route('employers-login')->with('error', 'Already Verified');
        }
        else{
            $user_data->verification_token = 'employer/'.$verificationToken;
            $user_data->save();
            Mail::to($user_data->BusinessEmail)->send(new VerificationEmail($user_data));
            return redirect()->route('home')->with('success', 'Verification Email Sent');
        }
    }
}