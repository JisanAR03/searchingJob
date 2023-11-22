<?php

namespace App\Http\Controllers;

use App\Models\JobSeeker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class JobSeekerRegistrationController extends Controller
{
    public function developerlook_index(){
        return view('job-seekers-registration');
    }
    public function developerlook_job_seeker_store(Request $request){
        $validator = Validator::make($request->all(), [
            'seeker_email' => 'required|email|unique:JobSeekers,Email',
            'password' => 'required|min:8',
        ]);
        if($validator->fails()){
            return redirect()->route('job_seeker_registration')->with('error', 'Invalid Email or Password');
        }
        else{
            JobSeeker::create(['Email' => $request->seeker_email,'PasswordHash' => Hash::make($request->password),]);
            return redirect()->route('home')->with('success', 'Account Created Successfully');
        }
    }
}
