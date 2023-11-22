<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;
use App\Models\JobApplication;

class JSDMyApplicationController extends Controller
{
    public function developerlook_index(){
        $application_data = JobApplication::query()->where('JobSeekerID', session('seeker_session'))->orderBy('JobApplicationID')->paginate(5);
        foreach($application_data as $application){
            $job_data = JobPost::query()->where('JobPostID', $application->JobPostID)->first();
            $application->JobTitle = $job_data->JobTitle;

        }
        return view('job-seeker-dash-my-application', compact('application_data'));
    }
    public function developerlook_delete_application(Request $request){
        $application_id = $request->input('id');
        $application_data = JobApplication::query()->where('JobApplicationID', $application_id)->first();
        $application_data->delete();
        return redirect()->route('job-seeker-my-application')->with('success', 'Application Deleted Successfully');
    }
}
