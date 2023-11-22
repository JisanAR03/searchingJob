<?php

namespace App\Http\Controllers;

use App\Models\JobSeeker;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\VerificationEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class JobSeekerLoginController extends Controller
{
    public function developerlook_index(){
        return view('job-seekers-login');
    }
    public function developerlook_job_seeker_login(Request $request){ 
        try{
            $validation = $request->validate([
                'seeker_email' => 'required|email',
                'password' => 'required|min:8',
            ]);
            if(!$validation){
                return redirect()->route('job_seekers_login')->with('error', 'Invalid Email or Password');
            }
            $user_data = JobSeeker::where('Email', $request->seeker_email)->first();
            if($user_data -> verification_token == null && $user_data -> is_verified == 1){
                if(($user_data->Email == $request->seeker_email) && (Hash::check($request->password, $user_data->PasswordHash))){
                    $request->session()->put('seeker_session', $user_data->JobSeekerID);
                    return redirect()->route('home')->with('success', 'Login Successfully');
                }
                else{
                    return redirect()->route('job_seekers_login')->with('error', 'Invalid Email or Password');
                }
            }
            else{
                return redirect()->route('job_seekers_login')->with('error', 'verify your email first');
            }
        }
        catch(\Exception $e){
            return redirect()->route('job_seekers_login')->with('error', 'Invalid Email or Password');
        }
        }
        public function developerlook_index_verify(){
            return view('job-seekers-login-verify');
        }
        public function developerlook_job_seeker_login_verify(Request $request){ 
            $seeker_mail = $request->input('seeker_email');
            $verificationToken = Str::random(40); 
            $user_data = JobSeeker::where('Email', $seeker_mail)->first();
            if($user_data -> verification_token == null && $user_data -> is_verified == 1){
                return redirect()->route('job_seekers_login')->with('error', 'Already Verified');
            }
            else{
                $user_data->verification_token = 'jobseeker/'.$verificationToken;
                $user_data->save();
                Mail::to($user_data->Email)->send(new VerificationEmail($user_data));
                return redirect()->route('home')->with('success', 'Verification Email Sent');
            }
        }
}
