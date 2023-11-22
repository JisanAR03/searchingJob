<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use App\Models\Employer;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function developerlook_index(Request $request){
        // input request
        $job_id = $request->input('id');
        $jobPostData = JobPost::query()->where('JobPostID', $job_id)->first();
        $employer_data = Employer::where('EmployerID', $jobPostData->EmployerID)->first();
        return view('jobs-single', compact('jobPostData', 'employer_data'));
        // return view('jobs-single');
    }
}
