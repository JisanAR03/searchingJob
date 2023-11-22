<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobArchiveController extends Controller
{
    public function developerlook_index(Request $request){
        $work_type = $request->input('work_type');
        $location = $request->input('location');
        $category = $request->input('category');
        $filter_data = $request->input('filter');
        $JobName = $request->input('JobName');
        $city = $request->input('city');
        // $state = $request->input('state');
        // $country = $request->input('country');
        // $all_location = null;
        // if($city != null || $state != null || $country != null){
        //     if($city != null && $state != null && $country != null){
        //         $all_location = $city.','.$state.','.$country;
        //     }
        //     elseif($city != null && $state != null && $country == null){
        //         $all_location = $city.','.$state;
        //     }
        //     elseif($city != null && $state == null && $country != null){
        //         $all_location = $city.','.$country;
        //     }
        //     elseif($city == null && $state != null && $country != null){
        //         $all_location = $state.','.$country;
        //     }
        //     elseif($city != null && $state == null && $country == null){
        //         $all_location = $city;
        //     }
        //     elseif($city == null && $state != null && $country == null){
        //         $all_location = $state;
        //     }
        //     elseif($city == null && $state == null && $country != null){
        //         $all_location = $country;
        //     }
        // }
        $JobCategory = $request->input('JobCategory');
        $Job_Work_Type = $request->input('Job_Work_Type');
        $baseSalary = $request->input('baseSalary');
        // dd($JobName, $city, $state, $country, $JobCategory, $Job_Work_Type, $baseSalary);
        $country_list = [];
        $state_list = [];
        $city_list = [];
        $category_list = [];
        $work_type_list = [];
        if($work_type != null && $location != null && $category != null){
            $job_data = JobPost::query()->where('WorkType', 'LIKE', '%'.$work_type.'%')->where('JobLocation', 'LIKE', '%'.$location.'%')->where('Category', 'LIKE', '%'.$category.'%')->orderBy('created_at')->paginate(10);
        }
        elseif($work_type != null && $location != null){
            $job_data = JobPost::query()->where('WorkType', 'LIKE', '%'.$work_type.'%')->where('JobLocation', 'LIKE', '%'.$location.'%')->orderBy('created_at')->paginate(10);
        }
        elseif($work_type != null && $category != null){
            $job_data = JobPost::query()
        ->where('WorkType', 'LIKE', '%' . $work_type . '%')
        ->where('Category', 'LIKE', '%' . $category . '%')
        ->orderBy('created_at')
        ->paginate(10);
        }
        elseif($location != null && $category != null){
            $job_data = JobPost::query()
        ->where('JobLocation', 'LIKE', '%' . $location . '%')
        ->where('Category', 'LIKE', '%' . $category . '%')
        ->orderBy('created_at')
        ->paginate(10);
        }
        elseif($work_type != null && $location == null && $category == null){
            $job_data = JobPost::query()->where('WorkType', 'LIKE', '%'.$work_type.'%')->orderBy('created_at')->paginate(10);
        }
        elseif($work_type == null && $location != null && $category == null){
            $job_data = JobPost::query()->where('JobLocation', 'LIKE', '%'.$location.'%')->orderBy('created_at')->paginate(10);
        }
        elseif($work_type == null && $location == null && $category != null){
            $job_data = JobPost::query()->where('Category', 'LIKE', '%'.$category.'%')->orderBy('created_at')->paginate(10);
        }
        elseif($filter_data == 'newest'){
            $job_data = JobPost::query()->orderByDesc('created_at')->paginate(10);
        }
        elseif($filter_data == 'oldest'){
            $job_data = JobPost::query()->orderBy('created_at')->paginate(10);
        }
        // elseif ($Job_Work_Type != null || $all_location != null || $JobCategory != null || $JobName != null) {
        //     $job_data = JobPost::query()
        //         ->where('WorkType', 'LIKE', '%' . $Job_Work_Type . '%')
        //         ->orwhere('JobLocation', 'LIKE', '%' . $all_location . '%')
        //         ->orwhere('Category', 'LIKE', '%' . $JobCategory . '%')
        //         ->orwhere('JobTitle', 'LIKE', '%' . $JobName . '%')
        //         ->orderBy('created_at')
        //         ->paginate(10);
        // }
        elseif ($Job_Work_Type != null || $city != null || $JobCategory != null || $JobName != null || $baseSalary != null) {
            $job_data = JobPost::query()->where('JobPostID', '>', 0)->orderBy('created_at');
            if ($Job_Work_Type != null) {
                $job_data->where('WorkType', 'LIKE', '%' . $Job_Work_Type . '%');
            } 
            if ($city != null) {
                $job_data->where('JobLocation', 'LIKE', '%' . $city . '%');
            }
            if ($JobCategory != null) {
                $job_data->where('Category', 'LIKE', '%' . $JobCategory . '%');
            }
            if ($JobName != null) {
                $job_data->where('JobTitle', 'LIKE', '%' . $JobName . '%');
            }
            if($baseSalary != null){
                $baseSalary = (int) preg_replace('/[^0-9]/', '', $baseSalary);
                $job_data->whereRaw("CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(SalaryRange, ' - ', 1), '$', -1) AS UNSIGNED) >= $baseSalary");
            }
            $job_data = $job_data->paginate(10);
        }
        else{
            $job_data = JobPost::query()->orderByDesc('created_at')->paginate(10);
        }
        $job_data_for_option = JobPost::query()->orderByDesc('created_at')->paginate(10);
        foreach($job_data_for_option as $job){
            if(str::contains($job->JobLocation, ',')){
                $explode_location = explode(',', $job->JobLocation);
                $city_list[] = $explode_location[0];
            }
            else{
                $city_list[] = $job->JobLocation;
            }
            $category_list[] = $job->Category;
            $work_type_list[] = $job->WorkType;
        }
        $city_list = array_unique($city_list);
        // $state_list = array_unique($state_list);
        // $country_list = array_unique($country_list);
        $category_list = array_unique($category_list);
        $work_type_list = array_unique($work_type_list);
            return view('jobs-archive', compact('job_data','city_list','state_list','country_list','category_list','work_type_list'));
    }
}
