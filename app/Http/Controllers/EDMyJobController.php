<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;
use App\Models\JobApplication;

class EDMyJobController extends Controller
{
    public function developerlook_index(Request $request){
        if(session()->has('employer_session')){
            $filter_data = $request->input('filter');
            if($filter_data == 'newest'){
                $job_data = JobPost::query()->where('EmployerID', session('employer_session'))->orderByDesc('PostDate')->paginate(5);
            }
            elseif($filter_data == 'oldest'){
                $job_data = JobPost::query()->where('EmployerID', session('employer_session'))->orderBy('PostDate')->paginate(5);
            }
            else{
                $job_data = JobPost::query()->where('EmployerID', session('employer_session'))->orderByDesc('PostDate')->paginate(5);
            }
            foreach($job_data as $job){
                $application_form_count = JobApplication::where('JobPostID', $job->JobPostID)->count();
                $job->ApplicationFormCount = $application_form_count;
            }
            return view('employer-dash-my-job', compact('job_data'));
        }
        else{
            return redirect()->route('employers-login')->with('error', 'Please Login to Continue');
        }
    }
    public function developerlook_job_delete(Request $request){
        $job_id = $request->input('job_post_id');
        $job_data = JobPost::query()->where('JobPostID', $job_id)->first();
        $job_data->delete();
        return redirect()->route('employers-my-job')->with('success', 'Job Deleted Successfully');
    }
    public function developerlook_job_apply_permission(Request $request){
        $job_id = $request->input('job_post_id');
        $job_data = JobPost::query()->where('JobPostID', $job_id)->first();
        if($job_data->ApplyPermission == 1){
            $job_data->ApplyPermission = 0;
        }
        else{
            $job_data->ApplyPermission = 1;
        }
        $job_data->save();
        return redirect()->route('employers-my-job')->with('success', 'Job Apply Permission changed Successfully');
    }
    public function developerlook_job_preview(Request $request){
        $job_id = $request->input('job_post_id');
        $job_data = JobPost::query()->where('JobPostID', $job_id)->first();
        if($job_data->Active == 1){
            $job_data->Active = 0;
        }
        else{
            $job_data->Active = 1;
        }
        $job_data->save();
        return redirect()->route('employers-my-job')->with('success', 'Job Preview changed Successfully');
    }
}
