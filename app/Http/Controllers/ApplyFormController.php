<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\JobPost;
use Illuminate\Http\Request;

class ApplyFormController extends Controller
{
    public function developerlook_index(){
        if(session()->has('seeker_session')){
            return view('apply-form');
        }
        else{
            return redirect()->route('job_seekers_login')->with('error', 'Please Login to Continue');
        }
    }
    public function developerlook_apply_form(){
        return view('apply-form');
    }
    public function developerlook_apply_form_submit(Request $request){
        // seeker session check
        if(!(session()->has('seeker_session'))){
            return redirect()->route('home')->with('error', 'Please Login Seeker account to Continue');
        }
        try{
            if($request->hasFile('CoverLetter')) {
                $cover_file = $request->file('CoverLetter');
                $cover_exten = $cover_file->getClientOriginalExtension();
    
                if(!in_array($cover_exten, ['pdf', 'docx', 'doc'])) {
                    return redirect()->route('apply-form')->with('error', 'Invalid Cover Letter File');
                }
    
                $cover_name = 'apply_cover' . time() . '.' . $cover_exten;
                $cover_file->move(public_path('src/upload_resume'), $cover_name);
            }
            else{
                $job_id = $request->input('JobPostID');
                return redirect()->route('apply-form-post',['JobPostID' => $job_id])->with('error', 'Please Upload Cover Letter');
            }
            if($request->has('Email') && $request->filled('Email')){
                $request->validate([
                    'Email'=>'required|email',
                ]);
            }
            else{
                $job_id = $request->input('JobPostID');
                return redirect()->route('apply-form-post',['JobPostID' => $job_id])->with('error', 'Please Enter Email');
            }
            if($request->has('FullName') && $request->filled('FullName')){
                $request->validate([
                    'FullName'=>'required|string',
                ]);
            }
            else{
                $job_id = $request->input('JobPostID');
                return redirect()->route('apply-form-post',['JobPostID' => $job_id])->with('error', 'Please Enter Full Name');
            }
            if($request->has('PhoneNumber') && $request->filled('PhoneNumber')){
                $request->validate([
                    'PhoneNumber'=>'required|numeric',
                ]);
            }
            else{
                $job_id = $request->input('JobPostID');
                return redirect()->route('apply-form-post',['JobPostID' => $job_id])->with('error', 'Please Enter Phone Number');
            }
            if($request->has('Location') && $request->filled('Location')){
                $Location = $request->input('Location');
            }
            else{
                $Location = 'N/A';
            }
            if($request->has('CurrentRole') && $request->filled('CurrentRole')){
                $CurrentRole = $request->input('CurrentRole');
            }
            else{
                $CurrentRole = 'N/A';
            }
            if($request->has('CoverLetterOptional') && $request->filled('CoverLetterOptional')){
                $CoverLetterOptional = $request->input('CoverLetterOptional');
            }
            else{
                $CoverLetterOptional = 'N/A';
            }
            // AlertForFutureJobs
            if($request->has('AlertForFutureJobs') && $request->filled('AlertForFutureJobs')){
                $AlertForFutureJobs = $request->input('AlertForFutureJobs');
            }
            else{
                $AlertForFutureJobs = 0;
            }
            JobApplication::query()->create([
                'JobPostID' => $request->input('JobPostID'),
                'JobSeekerID' => session('seeker_session'),
                'CoverLetter' => $cover_name,
                'Email' => $request->input('Email'),
                'FullName' => $request->input('FullName'),
                'PhoneNumber' => $request->input('PhoneNumber'),
                'Location' => $Location,
                'CurrentRole' => $CurrentRole,
                'CoverLetterOptional' => $CoverLetterOptional,
                'AlertForFutureJobs' => $AlertForFutureJobs,
            ]);
            return redirect()->route('home')->with('success', 'Application Submitted Successfully');
        }
        catch(\Exception $e){
            $job_id = $request->input('JobPostID');
            return redirect()->route('apply-form-post',['JobPostID' => $job_id])->with('error', 'Something Went Wrong');
        }
    }
}
