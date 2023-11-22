<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;
use Exception;

class EDJobPostFormController extends Controller
{
    public function developerlook_index(){
        if(session()->has('employer_session')){
            return view('employer-dash-job-post-form');
        }
        else{
            return redirect()->route('employers-login')->with('error', 'Please Login to Continue');
        }
    }
    public function developerlook_upload_data(Request $request){
        try{
            JobPost::create([
                'EmployerID' => session('employer_session'),
                'JobTitle' => $request->JobTitle,
                'Category' => $request->Category,
                'PostDate' => date('Y-m-d H:i:s'),
                'PostExpired' => $request->PostExpired,
                'Compensation' => $request->Compensation,
                'WorkType' => $request->WorkType,
                'JobLocation' => $request->JobLocation,
                'Description' => $request->Description,
                'SalaryRange' => $request->SalaryRange,
                'Experience' => $request->Experience,
            ]);
            return redirect()->route('job-post-form')->with('success', 'Job Posted Successfully');
        }
        catch(Exception $e){
            return redirect()->route('job-post-form')->with('error', 'Error Posting Job');
        }
    }
}
