<?php

namespace App\Http\Controllers;

use App\Models\JobSeeker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class JobSeekerLoginController extends Controller
{
    public function developerlook_index(){
        return view('job-seekers-login');
    }
    public function developerlook_job_seeker_login(Request $request){ 
        $validation = $request->validate([
            'seeker_email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        if(!$validation){
            return redirect()->route('job_seekers_login')->with('error', 'Invalid Email or Password');
        }
        $user_data = JobSeeker::where('Email', $request->seeker_email)->first();
        if($user_data){
            if(($user_data->Email == $request->seeker_email) && (Hash::check($request->password, $user_data->PasswordHash))){
                $request->session()->put('seeker_session', $user_data->JobSeekerID);
                return redirect()->route('home')->with('success', 'Login Successfully');
            }
            else{
                return redirect()->route('job_seekers_login')->with('error', 'Invalid Email or Password');
            }
        }
        else{
            return redirect()->route('job_seekers_login')->with('error', 'Invalid Email or Password');
        }
        }
}
