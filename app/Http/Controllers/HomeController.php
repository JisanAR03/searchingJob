<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use App\Models\Employer;
use App\Models\JobSeeker;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function developerlook_index(){
        if(session()->has('seeker_session')){
            $user_data = JobSeeker::where('JobSeekerID', session('seeker_session'))->first();
            if($user_data->SubsType == 0){
                ;
            }
            else{
                $currentDate = date('Y-m-d');
                $expireDate = $user_data->SubsEndDate;
                if($expireDate < $currentDate){
                    $user_data->SubsType = 0;
                    $user_data->SubsEndDate = null;
                    $user_data->SubsSrtDate = null;
                    $user_data->SubsDay = null;
                    $user_data->save();
                }
                else{
                    $user_data->SubsDay = (strtotime($expireDate) - strtotime($currentDate)) / (60 * 60 * 24);
                    $user_data->save();
                }
            }
        }
        elseif(session()->has('employer_session')){
            $user_data = Employer::where('EmployerID', session('employer_session'))->first();
            if($user_data->SubsType == 0){ 
                ;
            }
            else{
                $currentDate = date('Y-m-d');
                $expireDate = $user_data->SubsEndDate;
                if($expireDate < $currentDate){
                    $user_data->SubsType = 0;
                    $user_data->SubsEndDate = null;
                    $user_data->SubsSrtDate = null;
                    $user_data->SubsDay = null;
                    $user_data->save();
                }
                else{
                    $user_data->SubsDay = (strtotime($expireDate) - strtotime($currentDate)) / (60 * 60 * 24);
                    $user_data->save();
                }
            }
        }
        $employer_data = Employer::all();
        foreach($employer_data as $employer){
            $employer->jobpost = JobPost::query()->where('EmployerID', $employer->EmployerID)->count();
        }
        $catagory_list = [];
        $location_list = [];
        $work_type_list = [];
        $job_post = JobPost::all();
        foreach($job_post as $job){
            $catagory_list[] = $job->Category;
            $explode_location = explode(',', $job->JobLocation);
            $location_list[] = $explode_location[0];
            $work_type_list[] = $job->WorkType;
        }
        $catagory_list = array_unique($catagory_list);
        $location_list = array_unique($location_list);
        $work_type_list = array_unique($work_type_list);
        return view('home', compact('employer_data','catagory_list','location_list','work_type_list'));
        // return view('home');
    }
    public function developerlook_logout(Request $request){
        $request->session()->flush();
        return redirect()->route('home')->with('success', 'Logout Successfully');
    }
}